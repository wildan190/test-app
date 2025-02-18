<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Report Summary</h3>

                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($labels),
                datasets: [{
                    label: 'Total Price',
                    data: @json($prices),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: document.documentElement.classList.contains('dark') ? 'rgba(255, 255, 255, 1)' : 'rgba(0, 0, 0, 1)'
                        }
                    },
                    x: {
                        ticks: {
                            color: document.documentElement.classList.contains('dark') ? 'rgba(255, 255, 255, 1)' : 'rgba(0, 0, 0, 1)'
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: document.documentElement.classList.contains('dark') ? 'rgba(255, 255, 255, 1)' : 'rgba(0, 0, 0, 1)'
                        }
                    }
                }
            }
        });
    </script>
</x-app-layout>
