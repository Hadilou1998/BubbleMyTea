<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="style.css"/>
        <title>My Portfolio</title>
    </head>


    <body>

		<header>
		<!-- <div> -->

		</header>
	
        <h2 class="title">Mon profil !</h2>

        <main>
            <form method="POST" action="{{ route('profil.updateShow') }}" >
                @csrf
                             
                <fieldset>
                    <legend>Personal informations</legend>

                    <br>

                    <label for="fname">Firstname :</label>
                    <input type="text" id="fname" name="fname" value=@foreach ($users as $user){{$user->first_name}}@endforeach size="10" disabled>

                    <br><br>

                    <label for="lname">Lastname :</label>
                    <input type="text" id="lname" name="lname" value=@foreach ($users as $user){{$user->last_name}}@endforeach size="10" disabled>
                    
                    <br><br>

                    <label for="email">Email :</label> 
                    <input type="email" id="email" name="email" value=@foreach ($users as $user){{$user->email}}@endforeach size="20" disabled>
                    
                    <br><br>

                    <label for="pnumber">Phone number :</label>
                    <input type="number" id="area_code" name="area_code" value=@foreach ($phoneNumbers as $phoneNumber){{$phoneNumber->area_code}}@endforeach size="7" disabled>
                    <input type="number" id="pnumber" name="pnumber" value=@foreach ($phoneNumbers as $phoneNumber){{$phoneNumber->number}}@endforeach size="10" disabled>

                </fieldset>

                <br><br>
            
                <button id="edit" onclick="myFunction()">EDIT</button>

                <button id="save" type="submit" onclick="alert('successfully modified')"disabled>SAVE</button >

                <script>
                    function myFunction() {
                    document.getElementById("fname").disabled = false;
                    document.getElementById("fname").required = true;

                    document.getElementById("lname").disabled = false;
                    document.getElementById("lname").required = true;

                    document.getElementById("email").disabled = false;
                    document.getElementById("email").required = true;
                    document.getElementById("email").type = "email";

                    document.getElementById("pnumber").disabled = false;
                    // document.getElementById("pnumber").type = number;

                    document.getElementById("edit").disabled = true;
                    document.getElementById("save").disabled = false;

                    }
                </script>

            </form>
        </main>
		
    </body>
</html>