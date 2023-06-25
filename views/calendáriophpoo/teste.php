<?php

class HotelReservation {
    private $checkInDate;
    private $checkOutDate;
    private $isBusinessTrip;
    private $numGuests;
    private $numChildren;
    private $numPets;

    public function setCheckInDate($date) {
        $this->checkInDate = $date;
    }

    public function setCheckOutDate($date) {
        $this->checkOutDate = $date;
    }

    public function setIsBusinessTrip($isBusinessTrip) {
        $this->isBusinessTrip = $isBusinessTrip;
    }

    public function setNumGuests($numGuests) {
        $this->numGuests = $numGuests;
    }

    public function setNumChildren($numChildren) {
        $this->numChildren = $numChildren;
    }

    public function setNumPets($numPets) {
        $this->numPets = $numPets;
    }

    public function displayReservationForm() {
        // Exibir o formulário de reserva aqui
        // Você pode usar HTML para construir o formulário com os campos desejados
    }

    public function makeReservation() {
        // Lógica para fazer a reserva com os dados fornecidos
        // Pode envolver conexão com banco de dados ou chamadas a APIs de reserva de hotel, por exemplo
    }
}

// Exemplo de uso
$reservation = new HotelReservation();
$reservation->setCheckInDate("2023-06-10");
$reservation->setCheckOutDate("2023-06-15");
$reservation->setIsBusinessTrip(false);
$reservation->setNumGuests(2);
$reservation->setNumChildren(1);
$reservation->setNumPets(0);

$reservation->displayReservationForm();
$reservation->makeReservation();

?>