<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $primaryKey = 'MLSNumber';
    public $timestamps = true;
    protected $fillable = ["BathsTotal", "BedsTotal", "City", "ListPrice", "MLSNumber", "Matrix_Unique_ID", "Neighborhood", "PostalCode", "SqftTotal", "StateOrProvince", "StreetDirPrefix", "StreetName", "StreetNumber", "StreetSuffix", "TaxAmount", "TransactionType", "YearBuilt"];
}
