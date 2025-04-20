<?php
use MachineCode\BinaryCompiler;
?>
<form method="POST">
    <label for="inputString">Enter your string:</label>
    <input type="text" name="inputString" id="inputString" required />
    <button type="submit">Compile to Binary</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputString = $_POST['inputString'];

    require_once __DIR__ . '/../src/BinaryCompiler.php';

    $compiler = new BinaryCompiler($inputString);
    $binaryOutput = $compiler->compile();

    echo '<h3>Binary Output:</h3>';
    echo '<pre>' . $binaryOutput . '</pre>';
}
?>
