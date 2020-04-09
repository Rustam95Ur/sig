<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    //Метод для получения chat_id
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }

    //Метод отправки уведомления в телеграм
    public function storeMessage(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $text = "A new contact us query from sigdev.kz\n"
            . "<b>Name:</b>\n"
            . "$request->name\n"
            . "<b>Email:</b>\n"
            . "$request->email\n"
            . "<b>Phone:</b>\n"
            . "$request->phone\n"
            . "<b>Subject:</b>\n"
            . "$request->subject\n"
            . "<b>Message: </b>\n"
            . $request->message;

        try {
            Telegram::sendMessage([
                'chat_id' => -1001294566431,
                'parse_mode' => 'HTML',
                'text' => $text
            ]);

            return view('home.success', [
                'success'   => 'Ваша заявка принята, Мы с вами свяжемся!',
            ]);

        } catch (Exception $ex) {
            return view('home.error', [
                'error'   => 'Возникла проблема при отправке :( свяжитесь с нами по телефону +7 771 746 9953',
            ]);
        }



        //return redirect()->back();
    }
}
