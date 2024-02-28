@extends('layouts.app')
@section('style')
    <style>
        .ask-question_alert {
            background: rgba(23, 162, 184, .1);
            min-height: 50px;
            border-radius: 5px;
            padding: 10px;
        }

        .form-group {
            margin: 5px;
        }
    </style>
@endsection('style')
@section('content')
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                role="tab" aria-controls="nav-home" aria-selected="true">Цены на услуги</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                role="tab" aria-controls="nav-profile" aria-selected="false">Информация, памятки</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button"
                role="tab" aria-controls="nav-contact" aria-selected="false">Отзывы</button>
            <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled"
                type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">Задать вопрос</button>
        </div>
    </nav>
    <br>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <div data-v-2b776ec8="" class="l-landing-content material-page__content">
                <p class="MsoNormal"><b><span
                            style="font-size:12.0pt;line-height:107%;mso-bidi-font-family:Calibri;
                mso-bidi-theme-font:minor-latin">
                            <font color="#085294">Вызов мобильной бригады</font>
                            <o:p></o:p>
                        </span></b></p>
                <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="720"
                    style="width: 432.1pt;">
                    <tbody>
                        <tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.0pt">
                            <td width="553" nowrap="" valign="bottom"
                                style="width:332.0pt;border:solid #505050 1.0pt;
                  mso-border-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""><b>Вид услуги&nbsp;</b>
                                        <o:p></o:p>
                                    </span></p>
                            </td>
                            <td width="167" nowrap="" valign="bottom"
                                style="width:100.1pt;border:solid #505050 1.0pt;
                  border-left:none;mso-border-top-alt:solid #505050 .5pt;mso-border-bottom-alt:
                  solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="font-weight: 700;">Стоимость</span><br></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:1;height:15.0pt">
                            <td width="553" nowrap="" valign="bottom"
                                style="width:332.0pt;border:solid #505050 1.0pt;
                  border-top:none;mso-border-left-alt:solid #505050 .5pt;mso-border-bottom-alt:
                  solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Срочный вызов 103 - Талгарский район<o:p>
                                        </o:p></span></p>
                            </td>
                            <td width="167" nowrap="" valign="bottom"
                                style="width:100.1pt;border-top:none;
                  border-left:none;border-bottom:solid #505050 1.0pt;border-right:solid #505050 1.0pt;
                  mso-border-bottom-alt:solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">13.000 тг<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:2;height:15.0pt">
                            <td width="553" nowrap="" valign="bottom"
                                style="width:332.0pt;border:solid #505050 1.0pt;
                  border-top:none;mso-border-left-alt:solid #505050 .5pt;mso-border-bottom-alt:
                  solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Срочный вызов 103- г.Алматы и г.Иссык <o:p>
                                        </o:p></span></p>
                            </td>
                            <td width="167" nowrap="" valign="bottom"
                                style="width:100.1pt;border-top:none;
                  border-left:none;border-bottom:solid #505050 1.0pt;border-right:solid #505050 1.0pt;
                  mso-border-bottom-alt:solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">15.000&nbsp;
                                        тг<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:3;height:15.0pt">
                            <td width="553" nowrap="" valign="bottom"
                                style="width:332.0pt;border:solid #505050 1.0pt;
                  border-top:none;mso-border-left-alt:solid #505050 .5pt;mso-border-bottom-alt:
                  solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Транспортировка тяжелобольных пациентов
                                        -Талгарский район<o:p></o:p></span></p>
                            </td>
                            <td width="167" nowrap="" valign="bottom"
                                style="width:100.1pt;border-top:none;
                  border-left:none;border-bottom:solid #505050 1.0pt;border-right:solid #505050 1.0pt;
                  mso-border-bottom-alt:solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">20.000 тг<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:4;height:15.0pt">
                            <td width="553" nowrap="" valign="bottom"
                                style="width:332.0pt;border-top:none;
                  border-left:solid #505050 1.0pt;border-bottom:none;border-right:solid #505050 1.0pt;
                  mso-border-left-alt:solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Дежурства&nbsp; <o:p></o:p></span></p>
                            </td>
                            <td width="167" nowrap="" valign="bottom"
                                style="width:100.1pt;border:none;
                  border-right:solid #505050 1.0pt;mso-border-right-alt:solid #505050 .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">10.000 тг/1час<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:5;mso-yfti-lastrow:yes;height:15.0pt">
                            <td width="553" nowrap="" valign="bottom"
                                style="width:332.0pt;border:solid #505050 1.0pt;
                  mso-border-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Интоксикация<o:p></o:p></span></p>
                            </td>
                            <td width="167" nowrap="" valign="bottom"
                                style="width:100.1pt;border:solid #505050 1.0pt;
                  border-left:none;mso-border-top-alt:solid #505050 .5pt;mso-border-bottom-alt:
                  solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">28.000 тг<o:p></o:p></span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="MsoNormal">
                    <o:p>&nbsp;</o:p>
                </p>
                <p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%">
                            <font color="#085294">Вызов при </font>
                        </span></b><b><span lang="EN-US"
                            style="font-size:12.0pt;
                line-height:107%;mso-ansi-language:EN-US">
                            <font color="#085294">COVID</font>
                            <o:p></o:p>
                        </span></b></p>
                <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="720"
                    style="width: 432.1pt;">
                    <tbody>
                        <tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid #505050 1.0pt;
                  mso-border-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <b>Услуга</b></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border:solid #505050 1.0pt;
                  border-left:none;mso-border-top-alt:solid #505050 .5pt;mso-border-bottom-alt:
                  solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <b>Стоимость</b></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:1;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid #505050 1.0pt;
                  border-top:none;mso-border-left-alt:solid #505050 .5pt;mso-border-bottom-alt:
                  solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">COVID ( выезд врача)<o:p></o:p></span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid #505050 1.0pt;border-right:solid #505050 1.0pt;
                  mso-border-bottom-alt:solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;50.000 тг<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:2;mso-yfti-lastrow:yes;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid #505050 1.0pt;
                  border-top:none;mso-border-left-alt:solid #505050 .5pt;mso-border-bottom-alt:
                  solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">COVID (выезд медсестры)<o:p></o:p></span>
                                </p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid #505050 1.0pt;border-right:solid #505050 1.0pt;
                  mso-border-bottom-alt:solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">50.000 тг<o:p></o:p></span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="MsoNormal">
                    <o:p>&nbsp;</o:p>
                </p>
                <p class="MsoNormal"><span style="line-height: 107%;"><span style="font-size: 16px;"><b>
                                <font color="#085294">Кабинет эндоскопии</font>
                            </b></span><b><span style="font-size: 12pt;">
                                <o:p></o:p>
                            </span></b></span></p>
                <p class="MsoNormal">

                </p>
                <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border: none;">
                    <tbody>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ"><b>Вид услуги</b>
                                        <o:p></o:p>
                                    </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:98.95pt;border:solid windowtext 1.0pt;
                  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="font-weight: 700; white-space: nowrap;">Стоимость</span><br></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    ФГДС<o:p></o:p>
                                </p>
                            </td>
                            <td width="165" valign="top"
                                style="width:98.95pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    6000 <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    Консультация врача гастроэнтеролога<o:p></o:p>
                                </p>
                            </td>
                            <td width="165" valign="top"
                                style="width:98.95pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    6000 <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%">
                            <font color="#085294"><br></font>
                        </span></b></p>
                <p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%">
                            <font color="#085294">Процедурный кабинет</font>
                            <o:p></o:p>
                        </span></b></p>
                <p class="MsoNormal">

                </p>
                <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border: none;">
                    <tbody>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ"><b>Вид услуги</b>
                                        <o:p></o:p>
                                    </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:98.95pt;border:solid windowtext 1.0pt;
                  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ"><b>Стоимость</b>
                                        <o:p></o:p>
                                    </span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    Иглотерапия<o:p></o:p>
                                </p>
                            </td>
                            <td width="165" valign="top"
                                style="width:98.95pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    4000 <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    Хиджама<o:p></o:p>
                                </p>
                            </td>
                            <td width="165" valign="top"
                                style="width:98.95pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    5000 <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    Аутогемотерапия<o:p></o:p>
                                </p>
                            </td>
                            <td width="165" valign="top"
                                style="width:98.95pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    1500<o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    Блокада <o:p></o:p>
                                </p>
                            </td>
                            <td width="165" valign="top"
                                style="width:98.95pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    3000<o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    Внутрисуставные инъекции<o:p></o:p>
                                </p>
                            </td>
                            <td width="165" valign="top"
                                style="width:98.95pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    3000<o:p></o:p>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%">
                            <font color="#085294"><br></font>
                        </span></b></p>
                <p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%">
                            <font color="#085294">Функциональная диагностика</font>
                            <o:p></o:p>
                        </span></b></p>
                <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="720"
                    style="width: 432.1pt;">
                    <tbody>
                        <tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid #505050 1.0pt;
                  mso-border-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""><b>Вид услуги</b>
                                        <o:p></o:p>
                                    </span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border:solid #505050 1.0pt;
                  border-left:none;mso-border-top-alt:solid #505050 .5pt;mso-border-bottom-alt:
                  solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""><b>Стоимость</b>
                                        <o:p></o:p>
                                    </span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:1;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid #505050 1.0pt;
                  border-top:none;mso-border-left-alt:solid #505050 .5pt;mso-border-bottom-alt:
                  solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">ЭКГ<o:p></o:p></span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid #505050 1.0pt;border-right:solid #505050 1.0pt;
                  mso-border-bottom-alt:solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">2000&nbsp;<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:2;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid #505050 1.0pt;
                  border-top:none;mso-border-left-alt:solid #505050 .5pt;mso-border-bottom-alt:
                  solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">СМАД<o:p></o:p></span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid #505050 1.0pt;border-right:solid #505050 1.0pt;
                  mso-border-bottom-alt:solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:3;mso-yfti-lastrow:yes;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid #505050 1.0pt;
                  border-top:none;mso-border-left-alt:solid #505050 .5pt;mso-border-bottom-alt:
                  solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">ХОЛТЕР<o:p></o:p></span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid #505050 1.0pt;border-right:solid #505050 1.0pt;
                  mso-border-bottom-alt:solid #505050 .5pt;mso-border-right-alt:solid #505050 .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">8000&nbsp;<o:p></o:p></span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="MsoNormal">
                    <o:p>&nbsp;</o:p>
                </p>
                <p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%">
                            <font color="#085294">Справки</font>
                            <o:p></o:p>
                        </span></b></p>
                <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="720"
                    style="width: 432.1pt;">
                    <tbody>
                        <tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""><b>Вид справки<o:p></o:p></b></span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border:solid windowtext 1.0pt;
                  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
                  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
                  0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal" align="center"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;
                  text-align:center;line-height:normal">
                                    <span style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"=""><b>Стоимость</b>
                                        <o:p></o:p>
                                    </span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:1;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
                  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
                  0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Справка на работу/учебу (форма 086-075)<o:p>
                                        </o:p></span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal" align="center"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;
                  text-align:center;line-height:normal">
                                    <span style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">4500<o:p></o:p>
                                        </span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:2;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
                  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
                  0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Паспорт здоровья ребенку(026 форма)<o:p>
                                        </o:p></span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal" align="center"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;
                  text-align:center;line-height:normal">
                                    <span style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">3000<o:p></o:p>
                                        </span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:3;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
                  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
                  0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Справка для посещения бассейна <o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal" align="center"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;
                  text-align:center;line-height:normal">
                                    <span style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">1500<o:p></o:p>
                                        </span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:4;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
                  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
                  0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Санаторно-курортная справка<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal" align="center"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;
                  text-align:center;line-height:normal">
                                    <span style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">4500<o:p></o:p>
                                        </span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:5;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
                  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
                  0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Эпид.окружение<o:p></o:p></span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal" align="center"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;
                  text-align:center;line-height:normal">
                                    <span style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">1000<o:p></o:p>
                                        </span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:6;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
                  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
                  0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Справка о состоянии здоровья<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal" align="center"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;
                  text-align:center;line-height:normal">
                                    <span style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">2000<o:p></o:p>
                                        </span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:7;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
                  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
                  0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Справка шоферская (форма 083)<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal" align="center"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;
                  text-align:center;line-height:normal">
                                    <span style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">3500<o:p></o:p>
                                        </span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:8;mso-yfti-lastrow:yes;height:15.0pt">
                            <td width="555" nowrap="" valign="bottom"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
                  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
                  0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">Справка от врача<o:p></o:p></span></p>
                            </td>
                            <td width="165" nowrap="" valign="bottom"
                                style="width:99.2pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt">
                                <p class="MsoNormal" align="center"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;
                  text-align:center;line-height:normal">
                                    <span style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">1500<o:p></o:p>
                                        </span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="MsoNormal">
                    <o:p>&nbsp;</o:p>
                </p>
                <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal">
                    <span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                " times=""
                        new="" roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal">
                    <font color="#085294"><span style="font-size: 16px;"><b>Рентген</b></span></font>
                </p>
                <p class="MsoNormal"
                    style="margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                    <b>
                        <!--[if !supportLineBreakNewLine]--><br>
                        <!--[endif]--></b>
                    <o:p></o:p>
                </p>

                <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0"
                    style="background: white;">
                    <tbody>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <b>Вид услуги</b>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border:solid windowtext 1.0pt;
                  border-left:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ"><b>&nbsp;Стоимость /тг</b></span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    1.&nbsp;<span lang="KZ">ФГ- Флюорография</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;1200&nbsp;</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">2. Рентгенография органов
                                        грудной клетки в прямой проекция</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;2500&nbsp;</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">3. Рентгенография грудной
                                        клетки в боковой проекций</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;3000&nbsp;</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">4. Рентгенография ребра прямой
                                        проекций</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;2500&nbsp;</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">5. Рентгенография ребра в косой
                                        проекций</span>&nbsp; (<span lang="KZ">касательной
                                        проекций</span>)<o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang="EN-US">3000&nbsp;</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">6. ГОП-грудной отдел позвонка в
                                        двух проекций</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;4000&nbsp;</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">7. Рентгенография –ШОП шейного
                                        отдела позванка в двух проекций</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">8. Рентгенография-ШОП шейного
                                        отдела позвонка с функциональном нагрузкой</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp; &nbsp;4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">9. Рентгенография
                                        ПОП-поясничного отдела позвонка в двух проекция</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">10. Рентгенография крестца и
                                        копчик в двух проекция</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">11. Рентгенография костей и
                                        сустамов&nbsp;</span>(<span lang="KZ">плечевого,
                                        локтевого,предкличие лучезапястного, кисте, бедро, коленного, голени,
                                        голеностопного стопа</span>)<span lang="KZ">в двух проекций</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">12. Рентгенография черепа в
                                        двух проекций</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">13. Рентгенография височной
                                        кости по шюллеру</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">14. Рентгенография височной
                                        кости по майеру</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">15. Рентгенография –ППН
                                        придаточных пазух носов</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;3500</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">16. Рентгенография костей носа
                                        в двух проекция</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;3000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">17. Рентгенография ключицы</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;2500</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">18. Рентгенография лопатки</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;2000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">19. Рентгенография грудина в
                                        двух проекция</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">20. Рентгеногфия конечности с
                                        охватом одного сустава в двух проекция</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">21. Рентгенография костей таза</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">22. Рентгенография
                                        тазабедренного сустава&nbsp;</span>(<span lang="KZ">на дисплайзию</span>)<o:p>
                                    </o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang="EN-US">4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">23. Рентгенография стопы на
                                        плоскоскопие с нагрузкой</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;5000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">24. Рентгенография кисти для
                                        определения зона роста в одной проекция</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;2000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">25. Рентгенография обзорная
                                        урография</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;3000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">26. Рентгенография&nbsp;
                                        экскреторная урография</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;7200</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">27. Рентгенография ШОП С1-С2
                                        через открытый рот&nbsp;</span>(<span lang="KZ">атлант</span>)<o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang="EN-US">3000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">28. Рентгенография череп
                                        затылок&nbsp; в одной проекция</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;2000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">29. Рентгенография череп орбита
                                        в одной проекция</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;2000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">30. Рентгенография органов
                                        брюшной полость&nbsp;</span>(<span lang="KZ">ОБП</span>)<o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;2500</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">31. Рентгенография изография с
                                        барий</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp;&nbsp;&nbsp;&nbsp; 5000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">32. Рентгенография пищевода с
                                        барий</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp;&nbsp;&nbsp;&nbsp; 3000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">33. Рентгенография турецкого
                                        седла в одной проекций</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp;&nbsp;&nbsp;&nbsp; 2000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">34. Рентгенография
                                        метросальпинг&nbsp; в одной проекций</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp;&nbsp;&nbsp;&nbsp; 3000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">35. Рентгенография таза вход в
                                        одной проекций</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp;&nbsp;&nbsp;&nbsp; 2000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">36. Рентгенография таза выход в
                                        одной проекций</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp;&nbsp;&nbsp;&nbsp; 2000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">37. Рентгенография таза в
                                        оксиальной проекций</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp;&nbsp;&nbsp;&nbsp; 3000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">38. Рентгенография плечевого
                                        сустава в оксиальной проекций</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp;&nbsp;&nbsp;&nbsp; 2000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    39<span lang="KZ">. Рентгенография череп в трех
                                        проекция</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp;&nbsp;&nbsp;&nbsp; 5250</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">39. Рентгенография органов
                                        брюшногй полости с барий</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">&nbsp; &nbsp; &nbsp;4000</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:41;mso-yfti-lastrow:yes;height:6.0pt">
                            <td width="566" valign="top"
                                style="width:339.7pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:6.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span lang="KZ">40. Рентгенография верхний
                                        нижний челюсти в дыух проекций &nbsp;&nbsp;</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="153" valign="top"
                                style="width:91.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:6.0pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    &nbsp; &nbsp; &nbsp;4000<o:p></o:p>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="MsoNormal"
                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal"><b><span
                            style="font-size: 12pt;">
                            <font color="#085294"><br></font>
                        </span></b></p>
                <p class="MsoNormal"
                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal"><b><span
                            style="font-size: 12pt;">
                            <font color="#085294"><br></font>
                        </span></b></p>
                <p class="MsoNormal"
                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal"><b><span
                            style="font-size: 12pt;">
                            <font color="#085294">Ультразвуковые исследования</font>
                        </span></b></p>
                <p class="MsoNormal"
                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal"><b><span
                            style="font-size: 12pt;">
                            <font color="#085294"><br></font>
                            <font color="#000000">
                                <o:p></o:p>
                            </font>
                        </span></b></p>
                <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border: none;">
                    <tbody>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""><b>Вид УЗИ-исследования</b>
                                        <o:p></o:p>
                                    </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border:solid windowtext 1.0pt;
                  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""><b>Стоимость</b>
                                        <o:p></o:p>
                                    </span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:1;height:28.2pt">
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:28.2pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">1. Узи органов брюшной полости (печень,<br>
                                        желчный пузырь, поджелудочная железа, селезенка)<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:28.2pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5000<o:p></o:p></span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">2. Узи органов брюшной полости (печень,<br>
                                        желчный пузырь, поджелудочная железа, селезенка, почки)<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">3. Узи почек + надпочечников<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">3000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4. Узи мочевого пузыря с определением
                                        объема остаточной мочи<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">2500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5. Узи органов малого таза (матка,
                                        яичники, трубы,<br>
                                        шейка матки + Узи по беременности до 8 недель)&nbsp;ОМТ<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6. Узи плода с 8 недели беременности<o:p>
                                        </o:p></span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">7. Фолликулометрия (1 исследование)<o:p>
                                        </o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">3000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">8. Фолликулометрия (2-3 исследование )<o:p>
                                        </o:p></span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">2500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">9. Узи предстательной железы
                                        трансабдоминально (органы малого<br>
                                        таза у мужчин - предстательная железа, мочевой пузырь +<br>
                                        остаточная моча, семенники)<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">10. ТРУЗИ&nbsp;предстательной железы
                                        трансректально (мочевой пузырь
                                        + остаточная моча, семенники)<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">11. Узи органов мошонки<o:p></o:p></span>
                                </p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">12. Узи щитовидной железы<o:p></o:p></span>
                                </p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">3000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">13. Узи молочных желез и регионырных
                                        лимфатических узлов<o:p></o:p></span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">3000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">14. Узи сердца (Эхокардиография<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">15. Нейросонография (Узи головного мозга
                                        детям до 1 года)<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">16. Нейросонография с доплерографией
                                        (Узи головного<br>
                                        мозга детям до 1 года)<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6500<o:p></o:p></span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">17. Узи мягких тканей одной
                                        анатомической области<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">3000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">18. <br>
                                        Узи лимфатических узлов одной анатомической области<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">3000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">19. Узи плевральных полостей<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">20. УЗДГ маточно-плацентарного
                                        кровообращения<br>
                                        (Доплерография плода с СМА)<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">21. УЗДГ сосудов головного мозга<o:p></o:p>
                                        </span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">22. УЗДГ брахицефальных артерий (БЦА)<o:p>
                                        </o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">23. УЗДГ сосудов головного мозга и
                                        брахиоцефальных артерий<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">10000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">24. Узи сердца (Эхокардиография)<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5000<o:p></o:p></span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:25;height:18.2pt">
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:18.2pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">25. УЗДГ сосудов верхних конечностей (2
                                        руки)<o:p></o:p></span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.2pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">26. УЗДГ 1-й верхней конечности (1 рука)
                                        <o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">3500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">27. УЗДГ вен нижних конечностей (2 ноги)
                                        <o:p></o:p></span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">8500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">28. УЗДГ вен нижних конечностей (1 нога)
                                        <o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">29. УЗДГ артерий нижних конечностей (2
                                        ноги)<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">30. УЗДГ сосудов нижних конечностей (1
                                        ноги артерий и вен)<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">31. УЗДГ сосудов печени<o:p></o:p></span>
                                </p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">32. УЗДГ сосудов почек<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">33. УЗДГ сосудов брюшной полости<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">34. Доплерография полового члена<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">35. Доплерография половых губ<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">36. Дуплексное сканирование сосудов
                                        головы<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">7000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">37. Дуплексное сканирование сосудов шеи<o:p>
                                        </o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">7000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">38. Дуплексное сканирование сосудов
                                        головы и шеи<o:p></o:p></span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">12000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">39. Дуплексное сканирование сосудов
                                        нижних конечностей<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">10000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">40. Дуплексное сканирование верхних
                                        конечностей<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">8000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">41. УЗИ 1-коленного сустава<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">42. Узи 2-коленных суставов<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">43. УЗИ 1-голеностопного сустава<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">44. Узи 2-голеностопных суставов<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">45. УЗИ 1-плечевого сустава<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">46. Узи 2-плечевых суставов<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">47. УЗИ 1-локтевого сустава<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">48. УЗИ 1-коленного сустава<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">49. Узи 2-локтевых суставов<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">50. УЗИ 1-лучезапястного сустава<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">51. Узи 2-лучезапястных суставов<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">52. УЗИ 1-тазобедренного сустава
                                        ВЗРОСЛОМУ<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">53. Узи тазобедренных суставов у ДЕТЕЙ
                                        до 1-го года жизни<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">54. Узи шейного отдела позвоночника<o:p>
                                        </o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">55. Узи грудинно-ключично-сосцевидных
                                        мышц у детей<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">56. Узи придаточных пазух носа<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">57. Эластография<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">58. УЗИ 1-коленного сустава<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">59. Узи вилочковой железы (ТИМУСА)<o:p>
                                        </o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">60. Узи слюнных желез<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">61. Узи лонного сочленения (СИМФИЗА)<o:p>
                                        </o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">3500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">62. Узи ахиллова сухожилия<o:p></o:p></span>
                                </p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">5500<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">63. Узи 3D, 4D<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">10000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">64. УЗИ 1-коленного сустава<o:p></o:p>
                                        </span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">4000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">65.</span><span
                                        style="mso-ascii-font-family:
                  Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
                  color:black;mso-fareast-language:RU;mso-bidi-font-weight:bold">
                                    </span><span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";=""
                                        mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;color:black;=""
                                        mso-fareast-language:ru"="">Комплекс "Здоровый мужчина"&nbsp;- УЗИ
                                        органов брюшной<br>
                                        полости (печень, желчный пузырь, поджелудочная<br>
                                        железа, селезенка). УЗИ почек и надпочечников.<br>
                                        УЗИ щитовидной железы. УЗДГ сосудов шеи и головы.<br>
                                        ЭхоКГ. УЗИ предстательной железы и мочевого пузыря<br>
                                        с определением объема остаточной мочи.<br>
                                        УЗИ органов мошонки.<o:p></o:p></span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">21000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">66.</span><span
                                        style="mso-ascii-font-family:
                  Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
                  color:black;mso-fareast-language:RU;mso-bidi-font-weight:bold">
                                    </span><span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";=""
                                        mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;color:black;=""
                                        mso-fareast-language:ru"="">Комплекс "Здоровая женщина"&nbsp;- УЗИ
                                        органов брюшной<br>
                                        полости ( печень, желчный пузырь, поджелудочная&nbsp;<br>
                                        железа, селезенка). УЗИ почек и надпочечников.<br>
                                        УЗИ щитовидной железы. УЗДГ сосудов шеи&nbsp;<br>
                                        и головы. ЭхоКГ. УЗИ органов малого таза.<br>
                                        УЗИ молочных желез.<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">21000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">67. Урологический комплекс № 1 - УЗИ
                                        предстательной железы,<br>
                                        органов мошонки, мочевого пузыря, остаточной мочи<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">6000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">68.</span><span
                                        style="mso-ascii-font-family:
                  Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
                  color:black;mso-fareast-language:RU;mso-bidi-font-weight:bold">
                                    </span><span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";=""
                                        mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;color:black;=""
                                        mso-fareast-language:ru"="">Урологический комплекс № 2 -&nbsp;УЗИ предстательной<br>
                                        железы, органов мошонки с допплерографией,<br>
                                        паховых лимфоузлов, Допплерография полового<br>
                                        члена, мочевого пузыря, остаточной мочи<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">11000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">69.</span><span
                                        style="mso-ascii-font-family:
                  Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
                  color:black;mso-fareast-language:RU;mso-bidi-font-weight:bold">
                                    </span><span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";=""
                                        mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;color:black;=""
                                        mso-fareast-language:ru"="">Урологический комплекс № 3 -&nbsp;УЗИ предстательной<br>
                                        железы, органов мошонки с допплерографией,<br>
                                        паховых лимфоузлов,Допплерография полового<br>
                                        члена, узи почек с допплерографией ренальных&nbsp;<br>
                                        сосудов, мочевого пузыря, остаточной мочи<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">14000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">70.</span><span
                                        style="mso-ascii-font-family:
                  Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
                  color:black;mso-fareast-language:RU;mso-bidi-font-weight:bold">
                                    </span><span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";=""
                                        mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;color:black;=""
                                        mso-fareast-language:ru"="">Урологический комплекс № 4 -&nbsp;УЗИ предстательной<br>
                                        железы с везикулографией, органов<br>
                                        мошонки с допплерографией, паховых<br>
                                        лимфоузлов, Допплерография полового<br>
                                        члена, узи почек с допплерографией<br>
                                        ренальных сосудов, надпочечников,&nbsp;<br>
                                        мочевого пузыря, остаточной мочи<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">19000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">71.</span><span
                                        style="mso-ascii-font-family:
                  Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
                  color:black;mso-fareast-language:RU;mso-bidi-font-weight:bold">
                                    </span><span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";=""
                                        mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;color:black;=""
                                        mso-fareast-language:ru"="">Гинекологический комплекс № 1 -&nbsp;УЗИ органов
                                        малого<br>
                                        таза с допплерографией сосудов, молочных&nbsp;<br>
                                        желез, щитовидной железы с допплерографией сосудов<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">9000<o:p></o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="555" valign="top"
                                style="width:332.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">72.</span><span
                                        style="mso-ascii-font-family:
                  Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
                  color:black;mso-fareast-language:RU;mso-bidi-font-weight:bold">
                                    </span><span style="mso-ascii-font-family:Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";=""
                                        mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;color:black;=""
                                        mso-fareast-language:ru"="">Гинекологический комплекс № 2 -&nbsp;УЗИ органов
                                        малого<br>
                                        таза с допплерографией сосудов, молочных<br>
                                        желез, щитовидной железы с допплерографией<br>
                                        сосудов, мочевого пузыря, остаточной мочи<o:p></o:p></span></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">&nbsp;</span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal">
                                    <span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"="">14000<o:p></o:p></span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="MsoNormal" align="center" style="text-align:center"><b><span lang="KZ"
                            style="font-size:28.0pt;mso-bidi-font-size:11.0pt;
                line-height:107%;font-family:"
                            times="" new="" roman","serif";mso-ansi-language:kz"="">&nbsp;</span></b></p>
                <p class="MsoNormal"
                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal"><b><span
                            style="font-size:12.0pt;mso-ascii-font-family:Calibri;
                mso-fareast-font-family:"
                            times="" new="" roman";mso-hansi-font-family:calibri;=""
                            mso-bidi-font-family:calibri;mso-fareast-language:ru"="">
                            <font color="#085294">Мультисрезовая
                                компьютерная томография</font>
                        </span></b></p>
                <p class="MsoNormal"
                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal"><b><span
                            style="font-size:12.0pt;mso-ascii-font-family:Calibri;
                mso-fareast-font-family:"
                            times="" new="" roman";mso-hansi-font-family:calibri;=""
                            mso-bidi-font-family:calibri;mso-fareast-language:ru"="">
                            <font color="#085294"><br></font>
                            <o:p></o:p>
                        </span></b></p>
                <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" align="left"
                    style="border: none; margin-left: 7.2pt; margin-right: 7.2pt;">
                    <tbody>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"=""><b>Исследование</b></span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border:solid windowtext 1.0pt;
                  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"=""><b>Дневной
                                            тариф<br>
                                            с 08:00 до 18:00</b></span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border:solid windowtext 1.0pt;
                  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"=""><b>Вечерний
                                            тариф<br>
                                            с 18:00 до 24:00</b></span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border:solid windowtext 1.0pt;
                  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"=""><b>Вечерний
                                            тариф<br>
                                            с 24:00 до 06:00</b>
                                        <o:p></o:p>
                                    </span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">1.КТ
                                        головного мозга<o:p></o:p></span></p>
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>&nbsp;</b></p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:2;height:35.3pt">
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:35.3pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">2.КТ костей
                                        лицевого скелета</span><span
                                        style="mso-ascii-font-family:Calibri;mso-hansi-font-family:
                  Calibri;mso-bidi-font-family:Calibri;color:black">
                                        <o:p></o:p>
                                    </span></p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.3pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.3pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.3pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>3.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ придаточных пазух носа</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>4.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ пирамиды височных костей и
                                        сосцевидных отростков</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>5.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ шейного отдела позвоночника</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>6.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ грудного отдела позвоночника</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>7.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ поясничного отдела позвоночника</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>8.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ копчика и крестца, илеосакральных
                                        сочленений</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>9.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ органов грудной клетки и
                                        средостения</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>10.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ органов брюшной полости и
                                        забрюшинного<br>
                                        пространства (с 09:00 до 12:00 часов)</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>11.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ органов малого таза</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>12.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ мочевыводящей системы (почки,<br>
                                        мочеточники, мочевой пузырь)</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>13.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ плечевого сустава</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>14.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ плечевой кости</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>15.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ предплечья</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>16.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ локтевого сустава</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>17.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ лучезапястного сустава</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>18.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ кисти</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>19.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ тазобедренных суставов</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>14.00</b>0 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>20.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ тазовых костей</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>21.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ бедренной кости</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>22.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ коленного сустава</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>23.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ голеностопного сустава</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                        <tr style="mso-yfti-irow:24;mso-yfti-lastrow:yes;height:25.65pt">
                            <td width="248" valign="top"
                                style="width:148.6pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:25.65pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <b>24.</b><span
                                        style="mso-ascii-font-family:Calibri;mso-fareast-font-family:
                  "
                                        times="" new=""
                                        roman";mso-hansi-font-family:calibri;mso-bidi-font-family:calibri;=""
                                        color:black;mso-fareast-language:ru"=""> КТ стопы</span>
                                    <o:p></o:p>
                                </p>
                            </td>
                            <td width="143" valign="top"
                                style="width:85.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:25.65pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    14.000 тг<o:p></o:p>
                                </p>
                            </td>
                            <td width="164" valign="top"
                                style="width:98.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:25.65pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    11.200 тг<b>
                                        <o:p></o:p>
                                    </b></p>
                            </td>
                            <td width="165" valign="top"
                                style="width:99.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:25.65pt">
                                <p class="MsoNormal"
                                    style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                  normal;mso-element:frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:
                  around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
                  column;mso-element-top:.05pt;mso-height-rule:exactly">
                                    <span
                                        style="mso-ascii-font-family:
                  Calibri;mso-fareast-font-family:"
                                        times="" new="" roman";mso-hansi-font-family:calibri;=""
                                        mso-bidi-font-family:calibri;color:black;mso-fareast-language:ru"="">9800 тг<o:p>
                                        </o:p></span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="MsoNormal"><strong><span
                            style="font-size: 18pt; line-height: 107%; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><br
                                clear="all">
                            <o:p></o:p>
                        </span></strong></p>
               
                <p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%"><br></span></b></p>
                <p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%"><a
                                href="/ru/landing/75346631630058258/5/301505951642772924" target="_blank">Прейскурант
                                лабораторных анализов</a></span></b></p>
                <p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%"><a
                                href="/ru/landing/75346631630058258/5/771219251643208000" target="_blank">Прейкурант
                                стоматологических услуг</a></span></b></p>
                <p class="MsoNormal"><b><span style="font-size:12.0pt;line-height:107%"><br>
                            <o:p></o:p>
                        </span></b></p>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <div class="c-blog-details__content c-content-custom">
                <p>От проникновения чужеродных бактерий, вирусов и белков организм защищает иммунная система. Она уничтожает собственные дефектные клетки, которые могут дать начало онкологии. Иммунитет имеет сложную структуру. Его работа изучена не полностью, но давно известно, что нормальное функционирование зависит от витаминов.</p>
        
        <h2>Как витамины влияют на иммунитет</h2>
        
        <p>Витамины – это биологически активные вещества с небольшой молекулярной массой. Они необходимы человеку для поддержания обменных процессов. Витамины участвуют в биохимических реакциях, протекающих в клетках, и выступают в качестве катализаторов или коферментов. Их роль – ускорение или поддержание скорости реакции между другими веществами. Поэтому от их присутствия зависит синтез белков и производство многих компонентов клеток.</p>
        
        <p>Белки – это важный компонент иммунитета, они:</p>
        
        <ul>
            <li>это часть антитела, которые блокируют чужеродные микроорганизмы;</li>
            <li>помогают формировать зону воспаления, чтобы инфекция не попадала в другие ткани;</li>
            <li>регулируют скорость воспроизведения иммунных клеток;</li>
            <li>участвуют в аллергических реакциях;</li>
            <li>защищают органы от атаки иммунной системы и развития аутоиммунных реакций.</li>
        </ul>
        
        <p>Если человек не получает нужное количество витаминов, белков становится меньше, и эти функции нарушаются. <img src="/medias/-3.jpg?context=bWFzdGVyfGltYWdlc3wyMzA5NTN8aW1hZ2UvanBlZ3xpbWFnZXMvaDUyL2hjNy85OTExODkzOTgzMjYyLmpwZ3wzYjhiOTllODA4ZTBlODViMTlkMDg5Yzg1MDUwZTQ0MmUzNDcwOTY1NDk5ZTViZGZjNTFlMDlmMTIwYjZlNDk5" width="60%"></p>
        
        <h2>Почему возникает гиповитаминоз</h2>
        
        <p>Дефицит витаминов называется гиповитаминоз, а полное отсутствие нужного вещества – авитаминоз. Эти состояния возникают при недостаточном поступлении или при повышенной потребности организма в биологически активных веществах.</p>
        
        <p>Гиповитаминоз может возникать при неправильном питании, нехватке в рационе овощей и фруктов. Страдает иммунитет у людей, которые длительно придерживаются монодиеты и ограничивают употребление определенных групп продуктов. Не все учитывают изменение потребности в витаминах при определенном рационе. Увеличивая в меню количество белковой пищи, нужно дополнительно повышать содержание витамина В6, а придерживаясь вегетарианства, дополнительно принимать витамин В12. Иначе иммунная система даст сбой и увеличится количество простудных заболеваний, чаще напомнят о себе хронические болезни.</p>
        
        <p>Развитию гиповитаминоза способствуют:</p>
        
        <ul>
            <li>длительные инфекционные заболевания;</li>
            <li>период выздоровления;</li>
            <li>беременность и кормление грудью;</li>
            <li>болезни пищеварения;</li>
            <li>нехватка солнечного света;</li>
            <li>тяжелый физический труд.</li>
        </ul>
        
        <p>Поэтому врачи назначают всем людям из группы риска препараты для повышения иммунитета.</p>
        
        <h2>Можно ли укрепить иммунитет питанием</h2>
        
        <p>Если человек ищет способ, как повысить иммунитет, часто он начинает с народных методов или пробует корректировать питание. Некоторые лекарственные растения способны улучшить неспецифические факторы защиты, повышают выработку белков-интерферонов. Такими свойствами обладают средства на основе эхинацеи (например, <a href="/catalog/najrin-ekhinaceja/" target="_blank"><strong>Найрин эхинацея</strong></a>), березового гриба, ромашки, элеутерококка (например, <a href="/catalog/ekstrakt-eleuterokokka/" target="_blank"><strong>экстракт элеутерококка</strong></a>) и тимьяна. В народной медицине есть много рецептов приготовления отваров, настоев из этих растений в домашних условиях. Но нет научных данных, подтверждающих высокую эффективность этих средств.</p>
        
        <p>Экстракты трав, которые использует народная медицина, но в точных дозировках, можно приобрести в виде таблеток и готовых растворов. Эти препараты относятся к группе иммуностимуляторов. Они обеспечивают поддержку организма в сезон респираторных заболеваний, помогают быстро восстановиться после болезни и улучшают общее самочувствие.</p>
        
        <p><img src="/medias/-2.jpg?context=bWFzdGVyfGltYWdlc3w4MjY1Mzd8aW1hZ2UvanBlZ3xpbWFnZXMvaDk5L2gxMS85OTExODkzOTE3NzI2LmpwZ3w0NDMyMjU5ODU3YjRhNjE4YWE0Y2FjODdlNzE1NjJkZmMwYTM5MzcyOTI0YzhkMjllZGU5NmU1NThkYzc4ZmQz" width="60%"></p>
        
        <p>Основной источник поступления витаминных соединений – продукты питания. Считается, что здоровый взрослый человек сможет обеспечить организм нужными компонентами и укрепить иммунитет, если рацион будет разнообразным и сбалансированным.</p>
        
        <p>Существуют нормы потребления каждого типа витаминов для взрослых и детей, а также беременных женщин. В специальных таблицах можно найти сведения о содержании полезных веществ в 100 г определенных продуктов. После подсчета определяют, какую пищу и в каком количестве нужно употреблять в день, чтобы усиливать свой иммунитет.</p>
        
        <p>Недостаток способа в том, что содержание полезных веществ отличается от стандартных таблиц, а некоторые витамины разрушаются после приготовления продуктов. Поэтому взрослому человеку потребуется съедать несколько килограмм капусты или смородины в день, чтобы получить нужное количество аскорбиновой кислоты.</p>
        
        <h2>Когда нужно принимать витамины</h2>
        
        <p>Ухудшение функции иммунной системы связывают с окончанием зимнего сезона, но организм нуждается в поддержке круглый год. Витаминные препараты не нужно пить постоянно, достаточно укреплять иммунитет в критические периоды:</p>
        
        <ul>
            <li>осенью до подъема заболеваемости простудами и зимой;</li>
            <li>после перенесенного ОРВИ или другой инфекции;</li>
            <li>при планировании беременности или в период лактации;</li>
            <li>перед длительным путешествием и сменой часовых поясов или климатических зон;</li>
            <li>после лечения хронического заболевания;</li>
            <li>при длительном или частом употреблении алкоголя;</li>
            <li>при соблюдении строгой диеты.</li>
        </ul>
        
        <p>Иммунитет страдает при гормональных изменениях, которые происходят у женщин в разные периоды жизни. Его укрепление зависит не только от правильно подобранного основного лечения, но и использования витаминных средств.</p>
        
        <h2>ТОП-5 витаминов для укрепления иммунитета</h2>
        
        <p>Поднятию функции защитной системы помогают не все препараты. Исследования позволили выделить витамины, повышающие иммунитет и укрепляющие здоровье. Они выпускаются в виде отдельных лекарственных препаратов, которые можно использовать самостоятельно дома. Но чтобы эффективное средство не принесло вред, перед тем как потратить на него деньги, нужно посоветоваться с врачом. Он поможет определить, каких веществ не хватает и в какой дозировке их лучше принимать.</p>
        
        <h2>Витамин D</h2>
        
        <p>На первом месте среди средств для укрепления иммунитета <a href="/catalog/vital-d3/" target="_blank"><strong>витамин Д</strong></a>, или кальциферол. Его выработка происходит в коже под влиянием ультрафиолета у всех взрослых людей. Но в зимний сезон, в северных широтах, где солнечного света мало, организму не хватает кальциферола. Из-за гиповитаминоза снижается иммунитет, ухудшается всасывание кальция, может развиться остеопороз. У детей нехватка витамина приводит к рахиту. Фукции витамина Д различны.При его участии осуществляется противоопухолевый имунитет;проведено несколько клинических исследований, согласно которым,при нормальном содержании витаминов Д риск развития, например, рака кишечника снижается, практически, вчетверо. В настоящее время,исследуется возможность применения витаминов этой группы в лечении псориаза, остеопороза,избыточной массы тела, сердечно-сосудистых заболеваний; Витамин Д применяется для снижения возрастных изменений в тканях, профилактики таких тяжелейших болезней,как болезнь Альцгеймера, различных видов деменций и заболеваний,разрушающих оболочку нерва, состояний мышечной слабости и т.д.</p>
        
        <p>В самостоятельно(в домашних условиях)можно повышать содержание кальциферола рыбьим жиром, употребляя большое количество морской рыбы,выращенной в диких условиях, яица(желток),молочные продукты,водоросли,икра,кукурузное масло, некоторые виды лесных грибов.Самое большое содержание в лососине и печени трески. Взрослым можно применять комплексы, которые содержат холекальциферол и кальций, чтобы улучшать иммунитет и поддерживать минеральную плотность костей.</p>
        
        <h2>Группа В</h2>
        
        <p>Витаминные средства группы В включают несколько типов веществ. Доказано, что повышение иммунитета обеспечивают витамины В2, В6, В12. В домашних условиях их можно получить из животных продуктов: молока, яиц, печени,злаковые, бобовые, орехи,мясо, морепродукты, картофель.</p>
        
        <p>Влияние на иммунитет заключается в способности улучшать противомикробную защиту, увеличивать выработку Т и В-лимфоцитов, которые борются с патогенными микроорганизмами.</p>
        
        <p><img src="/medias/-1.jpg?context=bWFzdGVyfGltYWdlc3wyNzQzODl8aW1hZ2UvanBlZ3xpbWFnZXMvaDliL2gzNS85OTExODkzODUyMTkwLmpwZ3wyYTgwZTdhYWEyZDFlNzEwMmU0NTUyNTQ1NzhhNmI3YjBmMDBmNGI4ODllN2U0NWU5N2IwYWUzNWRiMzI0MTg3" width="60%"></p>
        
        <p>Красивая и здоровая кожа, нормальное зрение, в сочетании с В9 он улучшает процессы кроветворения. он стимулирует образование аденозитрифосфорной кислоты- «бензин» для работы клеток. Нехватка витамина В2 (<a href="/category/vitamin-b/" target="_blank"><strong>рибофлавина</strong></a>) проявляется в виде нарушений пищеварения, развития конъюнктивита, стоматита, себорейного дерматита. Если в организме мало В2, это проявляется склонностью к частым инфекционным заболеваниям.У больных ВИЧ гиповитаминоз ускоряет переход болезни в более тяжелую стадию.</p>
        
        <p>Для укрепления иммунитета витаминные препараты группы В выпускаются в виде отдельных средств каждого вида или готовых комплексов из 2 и более компонентов (например, <a href="/catalog/superum/" target="_blank"><strong>Суперум</strong></a>). В некоторых случаях для быстрого эффекта врач может назначить раствор для уколов.</p>
        
        <h2>Токоферол, или витамин Е</h2>
        
        <p>Эффективный способ получить суточную дозу <a href="/catalog/alfatokoferola-acetat/" target="_blank"><strong>токоферола</strong></a> – ежедневно употреблять в пищу семечки, орехи и растительные масла. Но потребность в витамине усиливает большое количество в рационе полиненасыщенных жирных кислот, которые содержатся в морской рыбе и морепродуктах.</p>
        
        <p>Укрепление иммунной функции при помощи токоферола происходит за счет увеличения антиоксидантной защиты клеточных оболочек. Он усиливает способность организма противостоять разрушительному влиянию вредных экологических факторов, вирусов. Этот витамин помогает повысить выработку антител, а также блокирует размножение опухолевых клеток. Чаще всего его эффект усиливают аскорбиновая кислота и ретинол, которые вместе формируют антиоксидантный комплекс.</p>
        
        <h2>Аскорбиновая кислота</h2>
        
        <p>При появлении первых признаков простуды быстро укрепить иммунитет помогает <a href="/catalog/askorbinka/" target="_blank"><strong>аскорбиновая кислота</strong></a>, или витамин С. Ее можно найти в большинстве продуктов растительного происхождения:</p>
        
        <ul>
            <li>квашеной капусте;</li>
            <li>смородине;</li>
            <li>шпинате;</li>
            <li>сладком перце;</li>
            <li>томатах;</li>
            <li>шиповнике;</li>
            <li>цитрусовых.</li>
        </ul>
        
        <p>Но аскорбиновая кислота разрушается при нагревании до 60°С, поэтому термически обработанная пища, чай уже не способны поддержать иммунную систему. Хороший способ – использовать готовые препараты, в которых точно известна дозировка активного вещества.</p>
        
        <p><img src="/medias/-2-.jpg?context=bWFzdGVyfGltYWdlc3w3NTAyNTR8aW1hZ2UvanBlZ3xpbWFnZXMvaDZhL2g0Yi85OTExODkzNjIyODE0LmpwZ3w3YmZmOTJlYWEyNmE0OWRlY2JhMjFjNzkyZmZmZTViOTRhNmM5N2VmYzdkOGZjNmMwZmMwMTc0YThlMTMzODAy" width="60%"></p>
        
        <p>Витамин С усиливает выработку всех типов антител, увеличивает активность клеток-макрофагов, которые поглощают чужеродные микроорганизмы и опасные вещества. Он помогает укрепить сосудистую стенку, нормализует обменные процессы в печени и обезвреживание в ней токсинов.</p>
        
        <h2>Витамин А</h2>
        
        <p>Исследования показали, что <a href="/catalog/retinola/" target="_blank"><strong>ретинол</strong></a>, или витамин А, усиливает синтез белков-интерлейкинов. Они стимулируют деление Т-лимфоцитов. Эти клетки являются активными участниками иммунных реакций, они выявляют и уничтожают вирусы и бактерии, борются с опухолевыми клетками. Использование препаратов ретинола позволяет увеличить устойчивость к инфекциям, ускорить выздоровление и обеспечить антиоксидантную защиту.</p>
        
        <p>Ретинол можно найти в привычных продуктах. В большом количестве он содержится в моркови, яйцах, печени трески, молоке и сливочном масле. Его много в шалфее, базилике, паприке и боярышнике.</p>
        
        <h2>Комплекс или по отдельности</h2>
        
        <p>Если врач заметит признаки гиповитаминоза, он назначит витаминный препарат определенного типа. Например, при остеопорозе нужен кальциферол, но для улучшения эффекта его используют вместе с кальцием. Людям, часто страдающим вирусным конъюнктивитом назначат пиридоксин. Но некоторые вещества работают лучше, если их используют в одной таблетке. Это относится к антиоксидантному комплексу из витаминов А, Е и С. Его можно использовать как для профилактики снижения иммунитета, так и на этапе выздоровления.</p>
        
        <p>Потребность в биологически активных веществах изменяется в зависимости от возраста, пола, сопутствующих патологий. Поэтому врачи могут рекомендовать готовые поливитаминные комплексы. Они имеют сбалансированный состав, учитывают индивидуальные особенности организма и помогут противостоять многим болезням.</p>
        </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
            tabindex="0">
            <div class="row m-2">
                <div class="col-md-6 p-2 question-form">
                    <h2 class="text-center mb-4">
                        Оставить отзыв
                    </h2> <!---->
                    <form>
                        <div class="form-group">
                            <div>
                                <div><!----> <input type="text" name="patient-name" placeholder="Введите имя"
                                        spellcheck="false" class="form-control"> <!---->
                                </div> <!---->
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <div><!----> <input type="text" name="email" placeholder="Почта"
                                        spellcheck="false" class="form-control"> <!----></div>
                                <!---->
                            </div> <small>(На этот email придет ответ)</small>
                        </div> <!---->
                        <div class="form-group">
                            <div>
                                <div><!---->
                                    <textarea name="description" placeholder="Введите текст вашего вопроса" spellcheck="true" class="form-control"
                                        style="overflow-y: hidden; height: 130.333px;"></textarea>
                                    <div class="me-input__limit-chars">
                                        0 / 600
                                    </div> <!---->
                                </div>
                            </div>
                        </div> <small class="question-form__error"></small> <button
                            class="me-button mb-2 me-button--primary is-block" type="submit"
                            disabled="disabled"><!---->
                            Задать вопрос
                            <!----> <!----></button>
                    </form>
                </div>
                <div class="col-md-6 p-2">
                    <div class="ask-question_alert">
                        <div>
                            <img src="{{ asset('img/infoicon.svg') }}" width="24" height="24" class="mb-2">
                        </div>
                        <div class="me-alert__body">
                            Мы не публикуем отзывы, которые написаны большими буквами, содержат ненормативную лексику,
                            оскорбления или не отвечают нашим правилам

                            Это конфиденциально! При сохранении отзыва, ваш e-mail не будет отображаться в отзыве или
                            передаваться другим лицам
                        </div> <!---->
                    </div>
                </div> <!---->
            </div>
        </div>
        <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab"
            tabindex="0">
            <div class="row m-2">
                <div class="col-md-6 p-2 question-form">
                    <h2 class="text-center mb-4">
                        Задать вопрос
                    </h2> <!---->
                    <form>
                        <div class="form-group">
                            <div>
                                <div><!----> <input type="text" name="patient-name" placeholder="Введите имя"
                                        spellcheck="false" class="form-control"> <!---->
                                </div> <!---->
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <div><!----> <input type="text" name="email" placeholder="Почта"
                                        spellcheck="false" class="form-control"> <!----></div>
                                <!---->
                            </div> <small>(На этот email придет ответ)</small>
                        </div> <!---->
                        <div class="form-group">
                            <div>
                                <div><!---->
                                    <textarea name="description" placeholder="Введите текст вашего вопроса" spellcheck="true" class="form-control"
                                        style="overflow-y: hidden; height: 130.333px;"></textarea>
                                    <div class="me-input__limit-chars">
                                        0 / 600
                                    </div> <!---->
                                </div>
                            </div>
                        </div> <small class="question-form__error"></small> <button
                            class="me-button mb-2 me-button--primary is-block" type="submit"
                            disabled="disabled"><!---->
                            Задать вопрос
                            <!----> <!----></button>
                    </form>
                </div>
                <div class="col-md-6 p-2">
                    <div class="ask-question_alert">
                        <div>
                            <img src="{{ asset('img/infoicon.svg') }}" width="24" height="24" class="mb-2">
                        </div>
                        <div class="me-alert__body">
                            Это конфиденциально! Ваш e-mail необходим только для того, чтобы клиника могла прислать вам
                            ответ.
                        </div> <!---->
                    </div>
                </div> <!---->
            </div>
        </div>
    </div>
@endsection
