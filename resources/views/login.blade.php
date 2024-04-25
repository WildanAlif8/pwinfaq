<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-container">
                                <label for="username">Username</label>
                                <div class="input-boxes">
                                    <div class="input-box">
                                        <input type="text" id="username" style="font-size: 13px;" name="username"
                                            placeholder="Enter your username" required>
                                    </div>
                                </div>
                            </div>
                            <div class="input-container">
                                <label for="username">Password</label>
                                <div class="input-boxes2">
                                    <div class="input-box">
                                        <input type="password" id="password" style="font-size: 13px;" name="password"
                                            placeholder="Enter your password" required>
                                        <i id="togglePassword" class="fa-regular fa-eye toggle-password"
                                            onclick="togglePasswordVisibility()"></i>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" value="submit" style="font-size: 14px;">Login</button>
                            <div class="caption" style=" padding-top: 60px;">
                                <div style="display: flex; align-items: center;">
                                    <div>
                                        <h4 style="color: #2E4B60; font-size: 11px; font-weight: 500;">Di bawah naungan</h4>
                                        <h4 style="color: #2E4B60; font-size: 11px; font-weight: 500;">SMK WIKRAMA BOGOR</h4>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @include('sweetalert::alert')
               
