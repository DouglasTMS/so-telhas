<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?= $title; ?></title>
    <style>
        body {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-family: Helvetica, sans-serif;
        }

        a {
            color: #000 !important;
            text-decoration: none;
        }

        ul {
            width: 100%;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        ul li {
            margin-bottom: 15px;
            padding: 0;
        }

        ul li a {
            color: #000 !important;
        }

        table {
            max-width: 500px;
            padding: 0 10px;
            background: #ffffff;
        }

        .content {
            font-size: 16px;
            margin-bottom: 25px;
            padding-bottom: 5px;
            border-bottom: 1px solid #EEEEEE;
        }

        .content p {
            margin: 35px 0;
            line-height: 1.5;
        }

        .content .btn {
            padding: 20px 30px;
            color: #ffffff;
            background-color: #2980b9;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -o-border-radius: 5px;
            font-style: normal;
            text-decoration: none;
        }

        .footer {
            font-size: 14px;
            color: #888888;
            font-style: italic;
        }

        .footer p {
            margin: 0 0 2px 0;
        }

        .btn {
            padding: 15px 25px;
            text-decoration: none;
            color: #fff;
            background-image: linear-gradient(30deg, #FAA444, #CF1C5D, #9E2487);
        }
    </style>
</head>

<body>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <div class="content">
                    <?= $this->section("content"); ?>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>