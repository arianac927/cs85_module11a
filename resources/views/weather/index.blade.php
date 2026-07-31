<h1>Weekly Weather Forecast</h1>
<table style="border: 1px solid #ccc; border-collapse; width: 100%;" cellpadding="10">
    <thead>
        <tr style="background-color: #ecf0f1;">
            <th>Day</th>
            <th>High</th>
            <th>Low</th>
            <th>Condition</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($weather as $day)
        <tr>
            <td>{{ $day['day'] }}</td>
            <td>{{ $day['high'] }}°F</td>
            <td>{{ $day['low'] }}°F</td>
            <td>
                @if ($day['condition'] === 'Rain')
                <span style="color: blue; font-weight: bold;">
                {{ $day['condition'] }}
                </span>
                @elseif ($day['condition'] === 'Sunny')
                <span style="color: orangered; font-weight: bold;">
                {{ $day['condition'] }}
                </span>
                @else
                {{ $day['condition'] }}
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>