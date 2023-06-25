<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paradise Reservas</title>
    <link rel="stylesheet" href="../calendáriophpoo/index.css">
    <script src="../calendáriophpoo/script.js"></script>
</head>
<body>
    <h1>Paradise Hotel Reservas</h1>
    <?php
      // Verifica se o formulário foi enviado
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $reservation = new HotelReservation();
        $reservation->setCheckInDate($_POST["check_in_date"]);
        $reservation->setCheckOutDate($_POST["check_out_date"]);
        $reservation->setIsBusinessTrip(isset($_POST["business_trip"]));
        $reservation->setNumGuests($_POST["num_guests"]);
        $reservation->setNumChildren($_POST["num_children"]);
        $reservation->setNumPets($_POST["num_pets"]);

        // Chama o método para fazer a reserva
        $reservation->makeReservation();
    }  
    ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="check_in_date">Data Check-in:</label>
    <input type="date" id="check-in" name="check_in_date" onchange="habilitarCheckOut()" required><br>

        <label for="check_out_date">Data Check-out:</label>
        <input type="date"id="check-out" name="check_out_date" disabled><br>
        <br>
        <label for="business_trip">Viagem a Trabalho:</label> 
        <input type="checkbox" name="business_trip">
        <br>
        <label for="num_guests">Hóspedes:</label>
        <select name="num_guests">
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select><br>

        <label for="num_children">Menores de 12 anos:</label>
        <select name="num_children">
        <?php
                for ($i = 0; $i <= 10; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select><br>

        <label for="num_pets">Pets:</label>
        <select name="num_pets">
            <?php
                for ($i = 0; $i <= 10; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>