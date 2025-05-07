<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Technology Event Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <p style="color: green;">Formulário enviado com sucesso!</p>
    <?php endif; ?>

    <form method="post" action="process.php">
        <div class="form-header">
            <h1>Technology Event Registration Form</h1>
            <div>
                <label for="name">Name:</label>
                <input type="text" name="Name" id="name" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" name="Email" id="email" required>
            </div>

            <div>
                <label for="phone">Phone:</label>
                <input type="tel" name="Phone" id="phone">
            </div>

            <div>
                <label for="age">Age:</label>
                <input type="number" name="Age" id="age" min="15" max="100" required>
            </div>

            <div>
                <label for="comments">Comments or suggestions</label>
                <textarea name="Comments" id="comments"></textarea>
            </div>

            <div>
                <fieldset>
                    <legend>Area of Interest</legend>
                    <p>
                        <input type="radio" name="Area" id="area_1" value="Web Development">
                        <label for="area_1">Web Development</label>
                    </p>
                    <p>
                        <input type="radio" name="Area" id="area_2" value="Artificial Intelligence">
                        <label for="area_2">Artificial Intelligence</label>
                    </p>
                    <p>
                        <input type="radio" name="Area" id="area_3" value="Cybersecurity">
                        <label for="area_3">Cybersecurity</label>
                    </p>
                    <p>
                        <input type="radio" name="Area" id="area_4" value="UX/UI Design">
                        <label for="area_4">UX/UI Design</label>
                    </p>
                </fieldset>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" name="Receive_News" id="subscribe" value="Yes">
                <label for="subscribe">I want to receive news by email</label>
            </div>

            <div class="button-group">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </div>
    </form>

    <br>
</body>
</html>
