<html>


    <head>
        <link rel="stylesheet" href="../../assets/css/styles.css">
        <link rel="stylesheet" href="../../assets/css/miete.css">
    </head>
    <body>
        <header>
            <a class="CompanyLogo" href="../index.html"> 
                <img class="CompanyLogo" src="../Images/CompanyLogo.png" alt="Company Logo">
            </a>
            <a class="login" href=" " target="_top">Anmelden</a>
           
            <div class="bar">
                <div class="Categoriesbar">
                    <h3 class="Categories">Categories</h3>
                </div>
                   <div class="searchbar">
                       <form action="/action_page.php">
                           <input type="text" placeholder="Search f&uuml;r Scooter.." name="search">
                          <!-- <svg height="24px" width="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                               <path fill="rgba(51, 51, 51, 1)" fill-rule="evenodd" clip-rule="evenodd" d="M6.29289 6.29289C6.68342 5.90237 7.31658 5.90237 7.70711 6.29289L12 10.5858L16.2929 6.29289C16.6834 5.90237 17.3166 5.90237 17.7071 6.29289C18.0976 6.68342 18.0976 7.31658 17.7071 7.70711L13.4142 12L17.7071 16.2929C18.0976 16.6834 18.0976 17.3166 17.7071 17.7071C17.3166 18.0976 16.6834 18.0976 16.2929 17.7071L12 13.4142L7.70711 17.7071C7.31658 18.0976 6.68342 18.0976 6.29289 17.7071C5.90237 17.3166 5.90237 16.6834 6.29289 16.2929L10.5858 12L6.29289 7.70711C5.90237 7.31658 5.90237 6.68342 6.29289 6.29289Z">
                               </path>
                            </svg>-->
                        </form>
                    </div>       
             </div>
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
