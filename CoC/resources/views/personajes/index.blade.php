<!-- resources/views/inventario/index.blade.php -->

@extends('layouts.app')

@section('content')
<button id="mostrarIdsBtn" class="bg-blue-500 text-white px-4 py-2 rounded-md" hidden>Añadir personajes a la sesion</button>
<button id="ocultarNoSeleccionadosBtn" class="bg-blue-500 text-white px-4 py-2 rounded-md"  onclick="hideUnselected()">Ocultar No Seleccionados</button>
<div class="flex flex-wrap justify-around">


    @foreach ($personajes as $personaje)
        <div class="m-4 w-96 justify-center border-2 shadow-2xl p-4 text-center text-white bg-cyan-700 personaje-{{ $personaje->id }}">
            <input type="checkbox" id="checkbox{{ $personaje->id }}" name="checkbox{{ $personaje->id }}" data-personaje-id="{{ $personaje->id }}" {{ $personaje->isChecked ? 'checked' : '' }}>
            <label for="checkbox{{ $personaje->id }}" class="text-black p-2 text-xl">Seleccionar</label>
            <p class="text-black p-2 text-2xl text-center">{{ $personaje->nombre }}</p>
            <p class="text-black p-2 text-xl text-center">
                Hp: <span class="text-white">{{ $personaje->HP }}</span>
                Mp: <span class="text-white">{{ $personaje->MP }}</span>
            </p>

            <table>
                               <tr>
                            <td>FUE:</td>
                            <td class="text-white text-right" onclick="updateStat('{{ $personaje->id }}', 'FUE', -1)"><button class="bg-red-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                            <td class="text-center" id="FUE-{{ $personaje->id }}">{{ $personaje->FUE }}</td>
                            <td class="text-white text-left" onclick="updateStat('{{ $personaje->id }}', 'FUE', 1)"><button class="bg-green-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                        </tr>
                        <tr>
                            <td>CON:</td>
                            <td class="text-white text-right" onclick="updateStat('{{ $personaje->id }}', 'CON', -1)"><button class="bg-red-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                            <td class="text-center" id="CON-{{ $personaje->id }}">{{ $personaje->CON }}</td>
                            <td class="text-white text-left" onclick="updateStat('{{ $personaje->id }}', 'CON', 1)"><button class="bg-green-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                        </tr>
                        <tr>
                            <td>TAM:</td>
                            <td class="text-white text-right" onclick="updateStat('{{ $personaje->id }}', 'TAM', -1)"><button class="bg-red-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                            <td class="text-center" id="TAM-{{ $personaje->id }}">{{ $personaje->TAM }}</td>
                            <td class="text-white text-left" onclick="updateStat('{{ $personaje->id }}', 'TAM', 1)"><button class="bg-green-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                        </tr>
                        <tr>
                            <td>DES:</td>
                            <td class="text-white text-right" onclick="updateStat('{{ $personaje->id }}', 'DES', -1)"><button class="bg-red-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                            <td class="text-center" id="DES-{{ $personaje->id }}">{{ $personaje->DES }}</td>
                            <td class="text-white text-left" onclick="updateStat('{{ $personaje->id }}', 'DES', 1)"><button class="bg-green-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                        </tr>
                        <tr>
                            <td>APA:</td>
                            <td class="text-white text-right" onclick="updateStat('{{ $personaje->id }}', 'APA', -1)"><button class="bg-red-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                            <td class="text-center" id="APA-{{ $personaje->id }}">{{ $personaje->APA }}</td>
                            <td class="text-white text-left" onclick="updateStat('{{ $personaje->id }}', 'APA', 1)"><button class="bg-green-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                        </tr>
                        <tr>
                            <td>INT:</td>
                            <td class="text-white text-right" onclick="updateStat('{{ $personaje->id }}', 'INT', -1)"><button class="bg-red-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                            <td class="text-center" id="INT-{{ $personaje->id }}">{{ $personaje->INT }}</td>
                            <td class="text-white text-left" onclick="updateStat('{{ $personaje->id }}', 'INT', 1)"><button class="bg-green-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                        </tr>
                        <tr>
                            <td>POD:</td>
                            <td class="text-white text-right" onclick="updateStat('{{ $personaje->id }}', 'POD', -1)"><button class="bg-red-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                            <td class="text-center" id="POD-{{ $personaje->id }}">{{ $personaje->POD }}</td>
                            <td class="text-white text-left" onclick="updateStat('{{ $personaje->id }}', 'POD', 1)"><button class="bg-green-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                        </tr>
                        <tr>
                            <td>EDU:</td>
                            <td class="text-white text-right" onclick="updateStat('{{ $personaje->id }}', 'EDU', -1)"><button class="bg-red-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                            <td class="text-center" id="EDU-{{ $personaje->id }}">{{ $personaje->EDU }}</td>
                            <td class="text-white text-left" onclick="updateStat('{{ $personaje->id }}', 'EDU', 1)"><button class="bg-green-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                        </tr>
                        <tr>
                            <td>HP:</td>
                            <td class="text-white text-right" onclick="updateStat('{{ $personaje->id }}', 'HP', -1)"><button class="bg-red-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                            <td class="text-center" id="HP-{{ $personaje->id }}">{{ $personaje->HP }}</td>
                            <td class="text-white text-left" onclick="updateStat('{{ $personaje->id }}', 'HP', 1)"><button class="bg-green-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                        </tr>
                        <tr>
                            <td>MP:</td>
                            <td class="text-white text-right" onclick="updateStat('{{ $personaje->id }}', 'MP', -1)"><button class="bg-red-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                            <td class="text-center" id="MP-{{ $personaje->id }}">{{ $personaje->MP }}</td>
                            <td class="text-white text-left" onclick="updateStat('{{ $personaje->id }}', 'MP', 1)"><button class="bg-green-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                        </tr>
                        <tr>
                            <td>COR:</td>
                            <td class="text-white text-right" onclick="updateStat('{{ $personaje->id }}', 'COR', -1)"><button class="bg-red-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                            <td class="text-center" id="COR-{{ $personaje->id }}">{{ $personaje->COR }}</td>
                            <td class="text-white text-left" onclick="updateStat('{{ $personaje->id }}', 'COR', 1)"><button class="bg-green-900 w-4 h-4 text-lg align-middle rounded-xl shadow-2xl"></button></td>
                        </tr>
            </table>
            <form class="mt-8" id="formularioImagen" action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input accept="image/*" type="file" name="imagen" id="inputImagen{{ $personaje->id }}" onchange="submitForm({{ $personaje->id }})" style="display: none;">
                <label for="inputImagen{{ $personaje->id }}" class="cursor-pointer bg-blue-500 text-white px-4 py-2 rounded-md">Selecciona avatar</label>
            </form>

        </div>
    @endforeach
</div>

<script>
    function submitForm(personajeId) {
        // Envía el formulario al seleccionar una imagen para un personaje específico
        document.getElementById(`formularioImagen${personajeId}`).submit();
    }

    function updateStat(personajeId, stat, amount) {
        // Realiza la actualización de la estadística mediante una llamada AJAX
        fetch(`{{ route('update-stat') }}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                personajeId: personajeId,
                stat: stat,
                amount: amount
            })
        })
        .then(response => response.json())
        .then(data => {
            // Actualiza la vista con el nuevo valor de la estadística
            document.getElementById(`${stat}-${personajeId}`).innerText = data.newValue;
        })
        .catch(error => {
            console.error('Error al actualizar la estadística:', error);
        });
    }
    function getSelectedIds() {
        const selectedIds = [];
        const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

        checkboxes.forEach(checkbox => {
            const personajeId = checkbox.value;
            selectedIds.push(personajeId);
        });

        return selectedIds;
    }

    // Función para mostrar los IDs de los personajes seleccionados
    function showSelectedIds() {
        const selectedIds = [];
        const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

        checkboxes.forEach(checkbox => {
            const personajeId = checkbox.dataset.personajeId;
            selectedIds.push(personajeId);
        });

        // Mostrar cada ID en una línea separada
        alert('IDs seleccionados:\n' + selectedIds.join('\n'));
    }
    function hideUnselected() {
        const checkboxes = document.querySelectorAll('[data-personaje-id]');
        checkboxes.forEach(checkbox => {
            const personajeId = checkbox.getAttribute('data-personaje-id');
            const div = document.querySelector(`.personaje-${personajeId}`);
            if (div) {
                if (checkbox.checked) {
                    div.style.display = 'block';
                } else {
                    div.style.display = 'none';
                }
            }
        });
    }
    function resetVisibility() {
        const personajes = document.querySelectorAll('.personaje');
        personajes.forEach(personaje => {
            personaje.style.display = 'block';
        });
    }

    // Asigna la función al evento click del botón
    document.getElementById('mostrarIdsBtn').addEventListener('click', showSelectedIds);
</script>

@endsection
