<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Congratulation!!!</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|Oxygen:700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://unpkg.com/scrollreveal@4.0.5/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <main>
            <section class="hero text-center text-light">
				<div class="hero-bg" style="height: 100vh;"></div>
                <div class="container-sm">
                    <div class="hero-inner">
						<div class="hero-copy" style="margin-top: 100px;">
	                        <h1 class="hero-title mt-0">Thank you for Playing</h1>
	                        <p class="hero-paragraph">Copy your unique code keep it safe!</p>
                            <h4>{{ Auth::user()->verification_code }}</h4>
	                        <p class="hero-paragraph">Please join our telegram page for more info about the raffle draw</p>
	                        <div class="hero-cta">
                                <a class="button button-primary button-wide-mobile" style="align-items: center; width: 200px; font-size:16px;font-weight:500;text-align:center;border-radius:100px;padding:5px;background:#389ce9;text-decoration:none;color:#fff;" href="https://xn--r1a.click/+zlzvzOQvYbo0OTM0" target="_blank"><svg style="width:30px;height:20px;vertical-align:middle;margin:0px 5px;" viewBox="0 0 21 18"><g fill="none"><path fill="#ffffff" d="M0.554,7.092 L19.117,0.078 C19.737,-0.156 20.429,0.156 20.663,0.776 C20.745,0.994 20.763,1.23 20.713,1.457 L17.513,16.059 C17.351,16.799 16.62,17.268 15.88,17.105 C15.696,17.065 15.523,16.987 15.37,16.877 L8.997,12.271 C8.614,11.994 8.527,11.458 8.805,11.074 C8.835,11.033 8.869,10.994 8.905,10.958 L15.458,4.661 C15.594,4.53 15.598,4.313 15.467,4.176 C15.354,4.059 15.174,4.037 15.036,4.125 L6.104,9.795 C5.575,10.131 4.922,10.207 4.329,10.002 L0.577,8.704 C0.13,8.55 -0.107,8.061 0.047,7.614 C0.131,7.374 0.316,7.182 0.554,7.092 Z"></path></g></svg>Telegram</a>
								{{-- <a class="button button-primary button-wide-mobile" href="#">Get early access</a> --}}
							</div>
						</div>
                    </div>
                </div>
            </section>
        </main>
    </div>
        <script src="{{asset('js/main.min.js')}}"></script>
    </body>
</html>
