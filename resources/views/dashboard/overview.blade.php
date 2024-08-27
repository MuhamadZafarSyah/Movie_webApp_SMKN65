@extends('dashboard.layout')

@section('admin_content')
    <main>
        <h1>Analytics</h1>
        <!-- Analyses -->
        <div class="analyse">
            <div class="sales">
                <div class="status">
                    <div class="info">
                        <h3>Total Movie</h3>
                        <h1>{{ count($movies) }}</h1>
                    </div>
                    <div>
                        <canvas id="pie"></canvas>

                    </div>
                </div>
            </div>
            <div class="visits">
                <div class="status">
                    <div class="info">
                        <h3>Total User</h3>
                        <h1>{{ count($totalUser) }}</h1>
                    </div>
                    <div>
                        <canvas id="pieuser"></canvas>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Analyses -->

        <!-- Recent Orders Table -->

    </main>
@endsection
