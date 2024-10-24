<?php
// Set the environment path for the compiler
putenv("PATH=C:\Program Files\CodeBlocks\MinGW\bin");
$CC="g++ -std=c++17";  // Updated to use C++17
$out="a.exe";
$code=$_POST["code"];
$input=$_POST["input"];
$filename_code="main.cpp";
$filename_in="input.txt";
$filename_error="error.txt";
$executable="a.exe";
$command=$CC." -lm ".$filename_code;	
$command_error=$command." 2>".$filename_error;

$file_code=fopen($filename_code,"w+");
fwrite($file_code,$code);
fclose($file_code);
$file_in=fopen($filename_in,"w+");
fwrite($file_in,$input);
fclose($file_in);
exec("cacls  $executable /g everyone:f"); 
exec("cacls  $filename_error /g everyone:f");	

// Start execution time tracking
$executionStartTime = microtime(true);

shell_exec($command_error);
$error=file_get_contents($filename_error);

if(trim($error) == "")  // No errors in compilation
{
    if(trim($input) == "")
    {
        $output = shell_exec($out);
    }
    else
    {
        $out = $out." < ".$filename_in;
        $output = shell_exec($out);
    }

    echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
}
else if(!strpos($error,"error"))  // Warnings but no errors
{
    echo "<pre>$error</pre>";
    if(trim($input) == "")
    {
        $output = shell_exec($out);
    }
    else
    {
        $out = $out." < ".$filename_in;
        $output = shell_exec($out);
    }

    echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
}
else  // Compilation errors
{
    echo "<pre>$error</pre>";
}

// End execution time tracking
$executionEndTime = microtime(true);
$seconds = $executionEndTime - $executionStartTime;
$seconds = sprintf('%0.2f', $seconds);
echo "<pre>Compiled And Executed In: $seconds s</pre>";

// Determine verdict
if(strpos($error, "error") !== false)
{
    echo "<pre>Verdict : CE</pre>";
}
else if(trim($output) == "" && trim($error) == "")  // Run-time error
{
    echo "<pre>Verdict : Run Time Error</pre>";
}
else if($seconds > 3)  // Time limit exceeded
{
    echo "<pre>Verdict : TLE</pre>";
}
else
{
    echo "<pre>Verdict : AC</pre>";
}

// Cleanup generated files
exec("del $filename_code");
exec("del *.o");
exec("del *.txt");
exec("del $executable");

?>
