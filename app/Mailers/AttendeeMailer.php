<?php

namespace App\Mailers;

use App\Models\Attendee;
use App\Models\Message;
use Carbon\Carbon;
use Log;
use Mail;


class AttendeeMailer extends Mailer
{

    public function sendAttendeeTicket($attendee)
    {


        Log::info("Sending ticket to: " . $attendee->email);

        $data = [
            'attendee' => $attendee,
        ];

        Mail::send('Mailers.TicketMailer.SendAttendeeTicket', $data, function ($message) use ($attendee) {
            $message->to($attendee->email);
            $message->subject('Your ticket for the ' . $attendee->order->event->title);
            // dd($attendee['first_name']);

            $file_name = $attendee['first_name']. '_' .$attendee['last_name']. '_' .$attendee->reference . '0';
            $file_path = public_path(config('attendize.event_pdf_tickets_path')) . '/' . $file_name . '.pdf';

            $message->attach($file_path);
        });

    }

    /**
     * Sends the attendees a message
     *
     * @param Message $message_object
     */
    public function sendMessageToAttendees(Message $message_object)
    {
        $event = $message_object->event;

        $attendees = ($message_object->recipients == 'all')
            ? $event->attendees // all attendees
            : Attendee::where('ticket_id', '=', $message_object->recipients)->where('account_id', '=',
                $message_object->account_id)->get();

        foreach ($attendees as $attendee) {

            $data = [
                'attendee'        => $attendee,
                'event'           => $event,
                'message_content' => $message_object->message,
                'subject'         => $message_object->subject,
                'email_logo'      => $attendee->event->organiser->full_logo_path,
            ];

            Mail::send('Emails.messageReceived', $data, function ($message) use ($attendee, $data) {
                $message->to($attendee->email, $attendee->full_name)
                    ->from(config('attendize.outgoing_email_noreply'), $attendee->event->organiser->name)
                    ->replyTo($attendee->event->organiser->email, $attendee->event->organiser->name)
                    ->subject($data['subject']);
            });
        }

        $message_object->is_sent = 1;
        $message_object->sent_at = Carbon::now();
        $message_object->save();
    }

    public function SendAttendeeInvite($attendee)
    {

        Log::info("Sending invite to: " . $attendee->email);

        $data = [
            'attendee' => $attendee,
        ];

        foreach ($attendee->order->orderItems as $order_item) {

            if($order_item->title == "Amina (All Access)"){

                Mail::queue('Mailers.TicketMailer.AminaOrderTickets', $data, function ($message) use ($attendee) {
                    $message->to($attendee->email);
                    $message->subject('Your ticket for the ' . $attendee->order->event->title);
                    
                    $file_name = $attendee['first_name']. '_' .$attendee['last_name'];

                    $file_path = public_path(config('attendize.event_pdf_tickets_path')) . '/' . $file_name . '_' . $attendee->reference . '0' . '.pdf';

                    $message->attach($file_path);
                });
            }

            elseif($order_item->title == "Nehanda (Speaker)"){

                Mail::queue('Mailers.TicketMailer.NehandaOrderTickets', $data, function ($message) use ($attendee) {
                    $message->to($attendee->email);
                    $message->subject('Your ticket for the ' . $attendee->order->event->title);
                    
                    $file_name = $attendee['first_name']. '_' .$attendee['last_name'];

                    $file_path = public_path(config('attendize.event_pdf_tickets_path')) . '/' . $file_name . '_' . $attendee->reference . '0' . '.pdf';

                    $message->attach($file_path);
                });
            }

            elseif($order_item->title == "Emotan (Vendor)"){

                Mail::queue('Mailers.TicketMailer.EmotanOrderTickets', $data, function ($message) use ($attendee) {
                    $message->to($attendee->email);
                    $message->subject('Your ticket for the ' . $attendee->order->event->title);
                    
                    $file_name = $attendee['first_name']. '_' .$attendee['last_name'];

                    $file_path = public_path(config('attendize.event_pdf_tickets_path')) . '/' . $file_name . '_' . $attendee->reference . '0' . '.pdf';

                    $message->attach($file_path);
                });
            }

            elseif($order_item->title == "Moremi (Press)"){

                Mail::queue('Mailers.TicketMailer.MoremiOrderTickets', $data, function ($message) use ($attendee) {
                    $message->to($attendee->email);
                    $message->subject('Your ticket for the ' . $attendee->order->event->title);
                    
                    $file_name = $attendee['first_name']. '_' .$attendee['last_name'];

                    $file_path = public_path(config('attendize.event_pdf_tickets_path')) . '/' . $file_name . '_' . $attendee->reference . '0' . '.pdf';

                    $message->attach($file_path);
                });
            }

            elseif($order_item->title == "Asantewaa (VIP)"){

                Mail::queue('Mailers.TicketMailer.AsantewaaOrderTickets', $data, function ($message) use ($attendee) {
                    $message->to($attendee->email);
                    $message->subject('Your ticket for the ' . $attendee->order->event->title);
                    
                    $file_name = $attendee['first_name']. '_' .$attendee['last_name'];

                    $file_path = public_path(config('attendize.event_pdf_tickets_path')) . '/' . $file_name . '_' . $attendee->reference . '0' . '.pdf';

                    $message->attach($file_path);
                });
            }

            elseif($order_item->title == "Okwei (General Admission)"){

                Mail::queue('Mailers.TicketMailer.OkweiOrderTickets', $data, function ($message) use ($attendee) {
                    $message->to($attendee->email);
                    $message->subject('Your ticket for the ' . $attendee->order->event->title);
                    
                    $file_name = $attendee['first_name']. '_' .$attendee['last_name'];

                    $file_path = public_path(config('attendize.event_pdf_tickets_path')) . '/' . $file_name . '_' . $attendee->reference . '0' . '.pdf';

                    $message->attach($file_path);
                });
            }

            elseif($order_item->title == "Okwei (Early Bird)"){

                Mail::queue('Mailers.TicketMailer.OkweiOrderTickets', $data, function ($message) use ($attendee) {
                    $message->to($attendee->email);
                    $message->subject('Your ticket for the ' . $attendee->order->event->title);
                    
                    $file_name = $attendee['first_name']. '_' .$attendee['last_name'];

                    $file_path = public_path(config('attendize.event_pdf_tickets_path')) . '/' . $file_name . '_' . $attendee->reference . '0' . '.pdf';

                    $message->attach($file_path);
                });
            }

            else{

                Mail::queue('Mailers.TicketMailer.SendAttendeeInvite', $data, function ($message) use ($attendee) {
                    $message->to($attendee->email);
                    $message->subject('Your ticket for the ' . $attendee->order->event->title);
                    
                    $file_name = $attendee['first_name']. '_' .$attendee['last_name'];

                    $file_path = public_path(config('attendize.event_pdf_tickets_path')) . '/' . $file_name . '_' . $attendee->reference . '0' . '.pdf';

                    $message->attach($file_path);
                });
            }

        }

    }


}
