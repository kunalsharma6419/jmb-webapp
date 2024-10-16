@extends('admin.layouts.app')

@section('title', 'dashboard')

@section('admincontent')
    <img src="web/assets/images/logo/logo-footer.png" class="w-[141px] h-[167px]">



    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Check for errors
            @if($errors->any())
                let errorMessages = '';
                @foreach ($errors->all() as $error)
                    errorMessages += '{{ $error }}';
                @endforeach
                
                Swal.fire({
                    icon: 'error',
                    title: 'There were some errors',
                    confirmButtonColor: "#DD6B55",
                    html: errorMessages ,
                    showConfirmButton: true
                    
                });
            @endif
    
            // Check for success message
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    confirmButtonColor: "#DD6B55",
                    text: '{{ session('success') }}',
                    timer: 3000,
                    showConfirmButton: false
                });
            @endif
        });
    </script>
    
@endsection
