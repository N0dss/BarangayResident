<?php

namespace App\Controllers;

class BarangayResident extends BaseController
{
    public function createBarangayResident()
    {
        echo "Create new Barangay Resident Information";
        echo "First Name: ";
        echo "Last Name: ";
        echo "Age: ";
        echo "Barangay: ";
        echo "Submit"; /** Button Submit */
    }

    public function updateBarangayResident()
    {
        echo "Update Barangay Resident Information";
        echo "First Name: John ";
        echo "Last Name: Doe ";
        echo "Age: 32";
        echo "Barangay: 23";
        echo "Submit"; /** Button Submit */
    }

    public function deleteBarangayResident()
    {
        echo "Delete Barangay Resident Information";
        echo "Select the user that you want to delete.";
        echo "[ ]1. John Doe";
        echo "[ ]2. Jane Doe";
        echo "[ ]3. Jackson Doe";
        echo "[ ]4. Jefferson Doe";
        echo "Submit"; /** Button Submit */
    }
}
