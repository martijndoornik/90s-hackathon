
<?php
// Global declarations
$myName = '';
$loveName = '';
$hasMyName = isset($_GET['my-name']);
$hasLoveName = isset($_GET['love-name']);
if ($hasLoveName && $hasMyName) {
    $myName = $_GET['my-name'];
    $loveName = $_GET['love-name'];

    $myInt = unpack('n', strtolower($myName));
    $loveInt = unpack('n', strtoupper($loveName));
    $result = (reset($myInt) + reset($loveInt)) % 101;
}

?>

<html>
     <head>
        <style>
            body {
                background: black url('./images/background.gif') repeat;
                border: #999999 1px solid;
                color: white;
            }    

            button, input {
                font-family: "Comic Sans MS", cursive, sans-serif;
                color: black;
            }

            .fill {
                width: 100%;
            }

            .half {
                width: 50%;
            }
        </style>
     </head>
     <body>
         <table border=2>
             <tr class="header">
                <td class="empty">

                </td>
                <td class="header fill" align="center">
                    <img src="./images/header.gif" />
                    <h1>Love calculator</h1>
                </td>
                <td class="empty">

                </td>
             </tr>
             <tr>
                 <td class="links">

                 </td>
                 <td class="content fill" align="center">
                     <form action="" method="get">
                        <table>
                            <tr>
                                <td class="half">
                                    Vul hier jouw naam in
                                </td>
                                <td class="half">
                                    Vul hier de naam van je geliefde in
                                    </td>
                            </tr>
                            <tr>
                                <td>
                                    <input id="my-name" name="my-name" value="<?php echo $myName; ?>" />
                                </td>
                                <td>
                                    <input id="love-name" name="love-name" value="<?php echo $loveName; ?>" />
                                </td>
                            </tr>
                            <?php if (isset($result)) : ?>
                            <tr>
                                <td colspan="2">
                                    <h1>Resultaat!</h1>
                                    <h2 id="result">Jij en <?php echo $loveName; ?> zijn <?php echo $result ?>% match!</h2>
                                </td>
                            </tr>
                            <?php endif; ?>
                            <tr>
                                <td colspan="2">
                                    <button type="submit">submit</button>
                                </td>
                            </tr>
                        </table>
        </form>
                 </td>
             </tr>
             <tr>
                 <td class="footer" align="center" colspan="2">
                     © 1996 Martijn Doornik en Tanja Galema
                 </td>
             </tr>
         </table>
     </body>
 </html>