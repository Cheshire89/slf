<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $primaryKey = 'Matrix_Unique_ID';
    public $timestamps = true;
    protected $fillable = [
        "BathsTotal",
        "BedsTotal",
        "City",
        "ListPrice",
        "Matrix_Unique_ID",
        "MLSNumber",
        "Neighborhood",
        "PostalCode",
        "SqftTotal",
        "StateOrProvince",
        "StreetDirPrefix",
        "StreetName",
        "StreetNumber",
        "StreetSuffix",
        "TaxAmount",
        "TransactionType",
        "YearBuilt",
        "StructuralStyle",
        "TotalGarageSpaces",
        "Zoning",
        "VirtualTourURLUnbranded",
        "BuildingName",
        "PropertyType",
        "MiddleOrJuniorSchool",
        "HighSchool",
        "ExteriorFeatures",
        "InteriorFeatures"
    ];
}
