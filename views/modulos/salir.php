<?php
/* Se destruyen las sessiones */
session_destroy();
echo '<script>
        window.location = "ingreso";
    </script>';