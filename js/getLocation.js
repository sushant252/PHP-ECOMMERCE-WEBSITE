function addLocationToForm() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            document.getElementById("latitude").value = position.coords.latitude;
            document.getElementById("longitude").value = position.coords.longitude;

            // After location is set, submit form again
            document.querySelector("form").submit();
        }, function(error) {
            alert("Location access denied or failed. Please allow location access.");
        });

        // Prevent form from submitting immediately
        return false;
    } else {
        alert("Geolocation is not supported by your browser.");
        return false;
    }
}


