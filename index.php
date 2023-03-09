<?php
    $success = false;
    if (isset($_POST['f_name']) && $success == false) {
        $server = "localhost";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($server, $username, $password);
        if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
        }

        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $cnic = $_POST['cnic'];
        $arrival = $_POST['arrival-station'];
        $departure = $_POST['departure-station'];
        $p_count = $_POST['passenger-count'];
        $date = $_POST['date-of-travel'];
        $ticket_type = $_POST['ticket-type'];
        $passenger_details  = $_POST['passenger-details'];
        $payment_method = $_POST['payment'];
        $seat_preference = $_POST['seat-preference'];


        $sql = "INSERT INTO `railways`.`ticket` (`first_name`, `last_name`, `email`, `phone`, `cnic`, `departure`,`arrival`, `num_passengers`, `date`, `ticket_type`, `passenger_detail`,`seat_prefrence`, `payment_option`) VALUES ('$f_name', '$l_name', '$email', '$phone', '$cnic',  '$departure','$arrival', '$p_count', '$date', '$ticket_type', '$passenger_details', '$seat_preference', '$payment_method');";

        if ($conn->query($sql) == true) {
            $success = true;
        } 
        $conn->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>

    <title>Pakistan Railways</title>
</head>
<body class="bg-gray-700">
    <nav class="bg-gray-800 backdrop-blur">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <h3 class="text-white text-2xl font-medium">
            Pakistan Railways
        </h3>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Timings</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">General Info</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">E-Tickect</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact Us</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
             
          </div>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
         
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
    </div>
  </div>
</nav>
<div class="container mx-auto p-4 bg-gray-700">
    
    <div class="mb-4 text-center">
        <h1 class="text-2xl font-bold text-white">Welcome to Pakistan Railways Platform</h1>
    <span class="text-white">
        Book your tickets online and get the best deals on your travel.
    </span>
    </div>
    <?php
    // flash message
    if ($success) {
        echo '<div class=" my-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">Your ticket has been booked successfully.</span>
        </div>';
        // $success = false;
    }   
  
        ?>
    <form class="bg-white p-6 rounded-lg shadow-md  drop-shadow" action="index.php" method="POST">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3 mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">First Name</label>
                <input class="border rounded-md px-4 py-2 w-full" type="text" id="name" name="f_name" required>
            </div>
            <div class="col-span-6 sm:col-span-3 mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">Last Name</label>
                <input class="border rounded-md px-4 py-2 w-full" type="text" id="name" name="l_name" required>
            </div>
            <div class="col-span-6 sm:col-span-4 mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                <input class="border rounded-md px-4 py-2 w-full" type="email" id="email" name="email" required>
            </div>
            <div class="col-span-6 sm:col-span-3 mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="phone">Phone</label>
                <input class="border rounded-md px-4 py-2 w-full" type="tel" id="phone" name="phone" required>
            </div>
            <div class="col-span-6 sm:col-span-3 mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="cnic">CNIC</label>
                <input class="border rounded-md px-4 py-2 w-full" type="text" id="cnic" name="cnic" required>
            </div>
          <div class="col-span-6 sm:col-span-3 mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="departure-station">Departure Station</label>
            <input class="border rounded-md px-4 py-2 w-full" type="text" id="departure-station" name="departure-station" required>
          </div>
          <div class="col-span-6 sm:col-span-3 mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="arrival-station">Arrival Station</label>
            <input class="border rounded-md px-4 py-2 w-full" type="text" id="arrival-station" name="arrival-station" required>
          </div>
          <div class="col-span-6 sm:col-span-2 mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="passenger-count">Number of Passengers</label>
            <input class="border rounded-md px-4 py-2 w-full" type="number" id="passenger-count" name="passenger-count" min="1" max="10" required>
          </div>
          <div class="col-span-6 sm:col-span-2 mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="date-of-travel">Date of Travel</label>
            <input class="border rounded-md px-4 py-2 w-full" type="date" id="date-of-travel" name="date-of-travel" required>
          </div>
          <div class="col-span-6 sm:col-span-2 mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="ticket-type">Type of Ticket</label>
            <select class="border rounded-md px-4 py-2 w-full" id="ticket-type" name="ticket-type" required select>
              <option value="">Select ticket type</option>
              <option value="economy">Economy</option>
              <option value="first-class">First Class</option>
            </select>
          </div>
          
          <div class="col-span-6 sm:col-span-6 mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="passenger-details">Passenger Details <span class="text-sm font-medium">
                (Optional)
            </span></label>
            <textarea class="border rounded-md px-4 py-2 w-full" id="passenger-details" name="passenger-details"></textarea>
          </div>
          <div class="col-span-6 sm:col-span-3 mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="seat-preference">Seat Preference</label>
            <select class="border rounded-md px-4 py-2 w-full" id="seat-preference" name="seat-preference" select>
              <option value="">No preference</option>
              <option value="window">Window</option>
              <option value="aisle">Aisle</option>
            </select>
          </div>
          <div class="col-span-6 sm:col-span-3 mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="food-preference">Payment Option</label>
            <select class="border rounded-md px-4 py-2 w-full" id="food-preference" name="payment" select>
              <option value="">Select payment option</option>
              <option value="cash">Cash</option>
              <option value="card">Card</option>
            </select>
          </div>
          
        </div>
        
        <div class="flex justify-center my-5">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                Book Ticket
            </button>
        </div>
    </form>
</div>
</body>
<script>
  document.querySelector('form').addEventListener('submit', function(e) {
      e.preventDefault();
      form.reset();
    }
  })
</script>
</html>