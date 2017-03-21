<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Servicio;

class VehiculoServicio extends Model
{
  use Traits\HasCompositePrimaryKey;
  protected $table = 'vehiculo_servicio';
  protected $fillable = ['servicio_id' , 'vehiculo_id','primero'];
  protected $primaryKey = ['servicio_id','vehiculo_id'];

  public function vehiculos(){
    return $this->hasOne(Vehiculo::class,"id","vehiculo_id");
  }

  public function servicio(){
    return $this->hasOne(Servicio::class,"id","servicio_id");
  }
}
