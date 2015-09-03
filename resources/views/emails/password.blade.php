@extends("emails.layout")

@section("content")
    <h2>{{ Lang::get("email.hello") }},</h2>

    <p>{{ Lang::get("passwords.mail-text") }}</p>

    <table>
        <tr>
            <td align="center">
                <p>
                    <a href="{{ URL::route('user.reset', ["token" => $token]) }}" class="button">{{ Lang::get("passwords.mail-button") }}</a>
                </p>
            </td>
        </tr>
    </table>

    <p>{!! Lang::get("passwords.mail-alternative-text", ["link" => URL::route('user.reset', ["token" => $token])]) !!}</p>
@stop