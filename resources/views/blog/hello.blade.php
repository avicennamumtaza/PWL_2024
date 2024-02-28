<!-- View pada resources/views/hello.blade.php --> 
<html> 
    <body> 
        {{-- <h1>Hello, {{ $name }}</h1>  --}}
        <h1>Hello, <?php echo $name; ?></h1>
        {{-- <h1>You are {{ $occupation }}</h1>  --}}
        <h1>You are <?php echo $occupation; ?></h1>
    </body> 
</html> 