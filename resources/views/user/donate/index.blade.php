@extends('user.layouts.app')
@section('content')
<div class="container d-flex justify-content-center align-items-center py-4">
    <div class="card shadow-lg border-warning" style="width: 100%; max-width: 600px; border-radius: 15px;">
        <div class="card-body position-relative">
            <div class="position-absolute top-0 end-0 p-3">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    x="0px"
                    y="0px"
                    width="23"
                    height="23"
                    viewBox="0 0 48 48"
                    class="svg-logo"
                >
                    <path fill="#f1c152" d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z"></path>
                    <path fill="#603d2f" d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z"></path>
                    <path fill="#d2691e" d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z"></path>
                </svg>
            </div>
            <br>
            <div class="text-center mb-3">
                <h5 class="fw-bold text-brown">You can Donate on these accounts</h5>
            </div>

            <div class="text-center mb-4">
                <div class="mb-2 d-flex justify-content-center align-items-center">
                    <span class="text-brown fw-bold">Meezan Bank</span>
                    <div class="text-dark ms-2" id="bankAccount"> 14060104471355</div>
                    <button class="btn btn-light ms-2" onclick="copyToClipboard('bankAccount')">
                        <i class="fas fa-copy" style="font-size: 18px;"></i>
                    </button>
                </div>

                <div class="mb-2 d-flex justify-content-center align-items-center">
                    <span class="text-brown fw-bold">Jazz Cash</span>
                    <div class="text-dark ms-2" id="jazzCash">0302 1665177</div>
                    <button class="btn btn-light ms-2" onclick="copyToClipboard('jazzCash')">
                        <i class="fas fa-copy" style="font-size: 18px;"></i>
                    </button>
                </div>
            </div>

            <div class="text-center text-brown">
                <small>
                    Sadqa & Zakat is also applicable<br>
                    <strong>Even your 10 rupees matter</strong>
                    <span class="text-warning">✈️</span>
                </small>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
    <style>
        .svg-logo {
            height: 35px;
            width: auto;
        }

        .text-brown {
            color: #603d2f;
        }

        .text-warning {
            color: #f1c152;
        }

        .btn-light {
            padding: 0;
            border: none;
            background: transparent;
        }

        .fas {
            cursor: pointer;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .svg-logo {
                height: 30px;
            }

            .card-body {
                padding: 20px;
            }

            .card {
                width: 100%;
                max-width: 500px;
            }

            .card-body h5 {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 576px) {
            .svg-logo {
                height: 25px;
            }

            .card-body {
                padding: 15px;
            }

            .card-body h5 {
                font-size: 1rem;
            }

            .text-center small {
                font-size: 0.8rem;
            }
        }
    </style>
@endsection

@section('script')
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- FontAwesome Script -->
    <script>
        function copyToClipboard(elementId) {
            var textToCopy = document.getElementById(elementId).textContent;
            var textArea = document.createElement("textarea");
            textArea.value = textToCopy;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand("copy");
            document.body.removeChild(textArea);
            toastr.success('Copied to clipboard!');
        }
    </script>
@endsection
