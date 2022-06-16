<html>


    <head>
        <link rel="stylesheet" href="../../assets/css/styles.css">
        <link rel="stylesheet" href="../../assets/css/miete.css">
    </head>
    <body>
        <header>
        <?php
              include('../pagelets/header.php');
        ?>
        </header>
        <div class="miete">
            <div class="table">
                <form action="">
                    <table>
                        <tr>
                            <td colspan="4"><b>Ihre Daten</b></td>
                        </tr>
                        <tr>
                            <td>Vorname</td>
                            <td><input type="text" id="firstname" readonly> </td>
                            <td>Nachname</td>
                            <td><input type="text" id="lastname" readonly></td>
                    </tr>
                    <tr>
                        <td>Postleitzahl</td>
                        <td><input type="text" name="ZIP" required pattern="[A-Za-z0-9]{1,20}" readonly></td>
                        <td>Addresse</td>
                        <td><input type="text" name="adress" required pattern="[A-Za-z0-9]{1,20}" readonly></td>
                    </tr>
                    <tr>
                        <td>Stadt</td>
                            <td><input type="text" name="city" required pattern="[A-Za-z0-9]{1,20}" readonly></td>
                            <td>E-Mail</td>
                            <td><input type="email" name="email" required readonly></td>
                        </tr>
                        <tr>
                            <td colspan="4"><hr></td>
                        </tr>
                        <tr>
                            <td>Startdatum</td>
                            <td><input type="date" placeholder="Startdatum"></td>
                            <td>Enddatum</td>
                            <td><input type="date" placeholder="Enddatum"></td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <button type="submit">Mieten</button>
                            </td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>
        </body>
</html>