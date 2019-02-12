<?php
/**
 * Mail handler
 */
list($name, $email, $subject, $message) = array_values($_POST);

$html ='<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <style>
        body{
            font-family: Ubuntu, sans-serif;
            background-color: #f0f3f4;
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        #users {
            border-collapse: collapse;
            width: 100%;
        }

        #users td, #users th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #users tr:nth-child(even){background-color: #f2f2f2;}

        #users tr:hover {background-color: #ddd;}

        #users th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>';


$html .='<table style="width:100%;background-color: #f0f3f4;padding:20px;">
    <tr>
        <td>
            <table style="width:640px;margin:0px auto;">
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td colspan="2">
                                    Hi,<br/>
                                    <p>
                                        Here is new enquiry from <b>'.$name.'</b>
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <table id="users" >
                            <tr>
                                <th>Name</th>
                                <th>'.$name.'</th>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>'.$email.'</td>
                            </tr>
                            <tr>
                                <td>Subject</td>
                                <td>'.$subject.'</td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>'.$message.'</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>';


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


if (mail('ismailelab@gmail.com', $subject, $html, $headers)) {
    echo '<pre>';print_r("Mail sent successfully");echo '</pre>';
} else {
    echo '<pre>';print_r("Mail sent failed");echo '</pre>';
}
exit;

