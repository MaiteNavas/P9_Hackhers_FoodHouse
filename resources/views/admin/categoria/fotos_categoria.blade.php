@extends('layouts.admin')

@foreach($rutasFotosEnS3 as $rutaFotoEnS3)
    <img src="{{ Storage::disk('s3')->url($rutaFotoEnS3) }}" alt="Mi Foto">
@endforeach
