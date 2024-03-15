<?php

require "vendor/autoload.php";
require "vendor/ariga/atlas-provider-doctrine/src/LoadEntities.php";

print (DumpDDL(["./src/entities"], "mysql"));