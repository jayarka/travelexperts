<?php
    //============customerclass.php=====================
    //-----------Author: Wei Guang Yan------------------

    //------------------Function:-----------------------
    //----Declare two classes for registration----------
    //==================================================


    class CustLgInfo {
        //---Declare class of log in information--------
        //--------Two private properties:---------------
        //------------a. $CustUserId: User ID-----------
        //------------b. $CustPwd: password-------------
        //--------Four methods:-------------------------
        //------------a. getCustUserId()----------------
        //------------b. getCustPwd()-------------------
        //------------c. setCustUserId()----------------
        //------------d. setCustPwd()-------------------

        //----------------properties--------------------
        private $CustUserId;
        private $CustPwd;
        Private $CustLoginKeyString;
        private $CustLoginValueString;
        

        function __construct($vArray) {
            $vArrayKeys = array_keys($vArray);
            $vArrayValues = array_values($vArray);
            $this->CustUserId = $vArrayValues[0];
            $this->CustPwd = $vArrayValues[1];
            $KeyString = $vArrayKeys[0].", ".$vArrayKeys[1];
            $this->CustLoginKeyString = $KeyString;
            
        }

        //------------------Methods----------------------
        public function getCustUserId() {
            return $this->CustUserId;
        }
        public function getCustPwd() {
            return $this->CustPwd;
        }
        public function setCustUserId($str) {
            $this->CustUserId=$str;
        }
        public function setCustPwd($str) {
            $this->CustPwd=$str;
        }
       
        public function getCustLoginKeyString() {
            return $this->CustLoginKeyString;
        }

        public function getCustLoginValueString() {
            $ValueString = "\"".$this->CustUserId."\", \"".$this->CustPwd."\"";
            return $ValueString;
        }

    }

    class CustmerInfo {
        //----Declare class of customer profile-------
        //---------11 private properties:-------------
        private $CustFirstName;
        private $CustLastName;
        private $CustAddress;
        private $CustCity;
        private $CustProv;
        private $CustPostal;
        private $CustCountry;
        private $CustHomePhone;
        private $CustBusPhone;
        private $CustEmail;
        private $CustKeyString;

        function __construct($vArray) {
            $vArrayKeys = array_keys($vArray);
            $vArrayValues = array_values($vArray);
            $this->CustFirstName = $vArrayValues[0];
            $this->CustLastName = $vArrayValues[1];
            $this->CustAddress = $vArrayValues[2];
            $this->CustCity = $vArrayValues[3];
            $this->CustProv = $vArrayValues[4];
            $this->CustPostal = $vArrayValues[5];
            $this->CustCountry = $vArrayValues[6];
            $this->CustHomePhone = $vArrayValues[7];
            $this->CustBusPhone = $vArrayValues[8];
            $this->CustEmail = $vArrayValues[9];
            $KeyString = $vArrayKeys[0];
            for($i=1; $i<10; $i++) {
                $KeyString = $KeyString.", ".$vArrayKeys[$i];
            }
            $this->CustKeyString = $KeyString;
        }

        //-----Methods for setting and getting values for each properties-------
        //--------Set properties-------------        
        public function setCustFirstName($str) {
            $this->$CustFirstName=$str;
        }
        public function setCustLastName($str) {
            $this->CustLastName=$str;
        }
        public function setCustAddress($str) {
            $this->$CustAddress=$str;
        }
        public function setCustCity($str) {
            $this->CustCity=$str;
        }
        public function setCustProv($str) {
            $this->$CustProv=$str;
        }
        public function setCustPostal($str) {
            $this->CustPostal=$str;
        }
        public function setCustCountry($str) {
            $this->$CustCountry=$str;
        }
        public function setCustHomePhone($str) {
            $this->CustHomePhone=$str;
        }
        public function setCustBusPhone($str) {
            $this->CustBusPhone=$str;
        }
        public function setCustEmail($str) {
            $this->CustEmail=$str;
        }

        //-----------Get Properties-------------
        public function getCustFirstName() {
            return $this->CustFirstName;
        }
        public function getCustLastName() {
            return $this->CustLastName;
        }
        public function getCustAddress() {
            return $this->CustAddress;
        }
        public function getCustCity() {
            return $this->CustCity;
        }
        public function getCustProv() {
            return $this->CustProv;
        }
        public function getCustPostal() {
            return $this->CustPostal;
        }
        public function getCustCustCountry() {
            return $this->CustCountry;
        }
        public function getCustHomePhone() {
            return $this->CustHomePhone;
        }
        public function getCustBusPhone() {
            return $this->CustBusPhone;
        }
        public function getCustEmail() {
            return $this->CustEmail;
        }

        public function getCustKeyString() {
            return $this->CustKeyString;
        }

        public function getCustValueString() {
            $strCust="\"".$this->CustFirstName."\", \"".$this->CustLastName."\", \"".$this->CustAddress."\", \"".$this->CustCity."\", \"".$this->CustProv."\", \"".
                $this->CustPostal."\", \"".$this->CustCountry."\", \"".$this->CustHomePhone."\", \"".$this->CustBusPhone."\", \"".$this->CustEmail."\"";
            return $strCust;
        }
    }

?>