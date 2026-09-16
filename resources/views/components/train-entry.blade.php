<tr class="train-row">
    <td class="train-cell">{{ $train_number }}</td>
    <td class="train-cell">{{ $company }}</td>
    <td class="train-cell">{{ $type }}</td>
    <td class="train-cell">{{ $platform }}</td>
    <td class="train-cell">{{ $departure_station }}</td>
    <td class="train-cell">{{ $arrival_station }}</td>
    <td class="train-cell">{{ $departure_datetime }}</td>
    <td class="train-cell">{{ $arrival_datetime }}</td>
    <td class="train-cell">{{ is_numeric(trim($carriages)) ? $carriages : "----" }}</td>
    <td class="train-cell">{{ trim($is_canceled) === '1' ? "----" : (trim($is_on_time) == '1' ? "Treno in orario" : "Treno in ritardo")}}</td>
    <td class="train-cell">{{ trim($is_canceled) === '1' ? "Treno cancellato" : "----" }}</td>
</tr>