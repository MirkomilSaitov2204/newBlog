<?php
 function myDateFormat($value) {
        return \Carbon\Carbon::createFromFormat($value, 'd/m/Y')->toDateTimeString();
    }
