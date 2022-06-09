<html>


    <head>
        <link rel="stylesheet" href="../../../assets/css/styles.css">
        <link rel="stylesheet" href="../../../assets/css/scooter1.css">
        <link rel="stylesheet" href="../../../assets/css/miete.css">
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
            <form action="">

                <div class="inputs">
                    <h4>Ihre Daten</h4>
                    <div class="name">
                        <label for="firstname">Vorname</label>
                        <input type="text" id="firstname" readonly>
                        <label for="lastname">Nachname</label>
                        <input type="text" id="lastname" readonly>
                    </div>
                    <div class="adress">
                        <label for="ZIP Code">Postleitzahl</label>
                        <input type="text" name="ZIP" required pattern="[A-Za-z0-9]{1,20}" readonly>
                        <label for="adress">Addresse</label>
                        <input type="text" name="adress" required pattern="[A-Za-z0-9]{1,20}" readonly><br><br>
                        <label city="">Stadt</label>
                        <input type="text" name="city" required pattern="[A-Za-z0-9]{1,20}" readonly>
                        <label for="email">E-Mail</label>
                        <input type="email" name="email" required readonly>
                    </div>
                    <hr>
                    <div class="duration">
                        <label for="Startdatum">Startdatum</label>
                        <input type="date" placeholder="Startdatum">
                        <label for="Enddatum">Enddatum</label>
                        <input type="date" placeholder="Enddatum">
                    </div>
                        <button type="submit">Mieten</button>
                </div>
            </form>
        </div>
    </body>
</html>
