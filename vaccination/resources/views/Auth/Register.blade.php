<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333333;
            text-align: center;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666666;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.2s;
        }

        input:focus {
            border-color: #007bff;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Create Account</h2>
<form action="{{route('userregister')}}" method="POST">
            @csrf
            
            <!-- Name Field -->
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text"  name="name" placeholder="Enter Name" value="{{old('name')}}">
                    @error("username")
              <p style="color: red;">{{$message}}</p>
              @enderror           
            </div>

            <!-- Email Field -->
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email"  name="email" placeholder="Enter Email" value="{{old('email')}}">
              @error("email")
              <p style="color: red;">{{$message}}</p>
              @enderror 
            </div>

            <!-- Password Field -->
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter password" value="{{old('password')}}">
                  @error("password")
              <p style="color: red;">{{$message}}</p>
              @enderror        
            </div>

            <!-- Submit Button -->
            <button type="submit">Sign Up</button>
            
        </form>
    </div>

</body>
</html>
