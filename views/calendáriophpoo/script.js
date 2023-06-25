function habilitarCheckOut() {
    var checkInInput = document.getElementById("check-in");
    var checkOutInput = document.getElementById("check-out");

    if (checkInInput.value !== '') {
      checkOutInput.disabled = false;
      var minCheckOutDate = new Date(checkInInput.value);
      minCheckOutDate.setDate(minCheckOutDate.getDate() + 1);
      var formattedMinCheckOutDate = minCheckOutDate.toISOString().split('T')[0];
      checkOutInput.setAttribute('min', formattedMinCheckOutDate);
    } else {
      checkOutInput.disabled = true;
      checkOutInput.value = '';
      checkOutInput.removeAttribute('min');
    }
  }