
<?php if (isset($_SESSION['userid']) == false) { ?>
    <section>
        <div>
            <div>
                <h4>REGISTER PERSON</h4>
            </div>
            <form action="incl.php" method="post">
                <input type="text" name="name" placeholder="name">
                <input type="text" name="surname" placeholder="surname">
                <input type="text" name="person_id" placeholder="person ID">
                <br>
                <button type="submit" name="submit">SUBMIT</button>
            </form>

    </section>
    </div>
<?php } ?>
