<tr class="train-row">
    <td class="train-cell">{{ $train_number }}</td>
    <td class="train-cell">{{ $company }}</td>
    <td class="train-cell">{{ $type }}</td>
    <td class="train-cell">{{ $platform }}</td>
    <td class="train-cell">{{ $departure_station }}</td>
    <td class="train-cell">{{ $arrival_station }}</td>
    <td class="train-cell">{{ $departure_datetime }}</td>
    <td class="train-cell">{{ $arrival_datetime }}</td>
    <td class="train-cell">{{ $carriages->isNotEmpty() && is_numeric($carriages->toHtml()) ? $carriages : "----" }}</td>
    <td class="train-cell">{{ $is_on_time->toHtml() == 1 ? "Treno in Ritardo" : "----"}}</td>
    <td class="train-cell">{{ $is_cancelled->toHtml() == 1 ? "Treno cancellato" : "----" }}</td>
</tr>