<?php

namespace App\Mailers;

use App\Models\Order;
use Log;
use Mail;

class OrderMailer
{
    public function sendOrderNotification(Order $order)
    {
        $data = [
            'order' => $order
        ];

        Mail::send('Emails.OrderNotification', $data, function ($message) use ($order) {
            $message->to($order->account->email);
            $message->subject('New order received on the event ' . $order->event->title . ' [' . $order->order_reference . ']');
        });

    }

    public function sendOrderTickets($order)
    {

        Log::info("Sending ticket to: " . $order->email);

        $data = [
            'order' => $order,
        ];

        foreach ($$order->orderItems as $order_item) {
            # code...
            var_dump($orderItems->title);
        }

        if($order->orderItems->title == "Amina"){
            Mail::send('Mailers.TicketMailer.AminaOrderTickets', $data, function ($message) use ($order) {
                $message->to($order->email);
                $message->subject('Your tickets for the ' . $order->event->title);
    
                $query = $order->attendees();
                $attendees = $query->get();
                $count_attendee = count($attendees);
                $j = 0;
                do {
                    $file_name = $attendees[$j]['first_name']. '_' .$attendees[$j]['last_name']. '_' .$order->order_reference;
                
                    $file_path = public_path(config('attendize.event_pdf_tickets_path') . '/' . $file_name . $j . '.pdf');
                    $message->attach($file_path);
                    $j++;
                } while ($j < $count_attendee);
            });
        }

        else {


        Mail::send('Mailers.TicketMailer.SendOrderTickets', $data, function ($message) use ($order) {
            $message->to($order->email);
            $message->subject('Your tickets for the ' . $order->event->title);

            $query = $order->attendees();
            $attendees = $query->get();
            $count_attendee = count($attendees);
            $j = 0;
            do {
                $file_name = $attendees[$j]['first_name']. '_' .$attendees[$j]['last_name']. '_' .$order->order_reference;
            
                $file_path = public_path(config('attendize.event_pdf_tickets_path') . '/' . $file_name . $j . '.pdf');
                $message->attach($file_path);
                $j++;
            } while ($j < $count_attendee);
        });

        }

    }

}
