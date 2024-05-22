var myModal = document.getElementById('exampleModalOrder');

myModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');
    var name = button.getAttribute('data-name');
    var cpu = button.getAttribute('data-cpu');
    var gpu = button.getAttribute('data-gpu');
    var motherboard = button.getAttribute('data-motherboard');
    var ram = button.getAttribute('data-ram');
    var price = button.getAttribute('data-price');

    document.getElementById('modalComputerName').innerHTML = name;
    document.getElementById('modalComputerCPU').innerHTML = '<strong>Процессор:</strong> ' + cpu;
    document.getElementById('modalComputerGPU').innerHTML = '<strong>Видеокарта:</strong> ' + gpu;
    document.getElementById('modalComputerMotherboard').innerHTML = '<strong>Материнская плата:</strong> ' + motherboard;
    document.getElementById('modalComputerRAM').innerHTML = '<strong>Оперативная память:</strong> ' + ram;
    document.getElementById('modalComputerPrice').innerHTML = '<strong>Цена:</strong> ' + price;

    document.getElementById('computer_id').value = id;
});
