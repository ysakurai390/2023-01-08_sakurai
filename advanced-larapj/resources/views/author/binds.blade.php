@extends('layouts.default')
<style>
  th {
    background-color:#289ADC;
    color:white;
    padding;5px 40px;
  }
  tr:nth-child(odd) td{
    background-color:#FFFFFF;
  }
  td {
    padding:25px 40px;
    background-color:#EEEEEE;
    text-aligh:center;
  }
  </style>

  @section('content')
  <P>AUTHOR</P>
  <table>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>AGE</th>
      <th>NATIONALITY</th>
    </tr>
    <tr>
      <td>{{$author->id}}</td>
      <td>{{$author->name}}</td>
      <td>{{$author->age}}</td>
      <td>{{$author->nationality}}</td>
    </tr>
  </table>
  @endsection