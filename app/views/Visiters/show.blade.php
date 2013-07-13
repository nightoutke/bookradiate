@extends('layouts.scaffold')

@section('main')

<h1>Show Visiter</h1>

<p>{{ link_to_route('Visiters.index', 'Return to all Visiters') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Password</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $Visiter->firstname }}}</td>
					<td>{{{ $Visiter->lastname }}}</td>
					<td>{{{ $Visiter->email }}}</td>
					<td>{{{ $Visiter->password }}}</td>
                    <td>{{ link_to_route('Visiters.edit', 'Edit', array($Visiter->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Visiters.destroy', $Visiter->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop