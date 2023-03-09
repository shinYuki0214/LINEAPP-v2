@extends('layouts.app2')
@section('sectiontitle', $receive_date->format('Y年m月d日の発注'))
@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-sm text-center table-bordered">
            <thead>
                <tr>
                    <th>会社名</th>
                    <th scope="col">バナナケーキ</th>
                    <th scope="col">ミニバナナケーキ</th>
                    <th scope="col">ミニバナナケーキ　6個入</th>
                    <th scope="col">バナナケーキ（ポケモン）</th>
                    <th scope="col">ミニバナナケーキ6個入（ポケモン）</th>
                    <th scope="col">美ら恋ガレット単品</th>
                    <th scope="col">美ら恋ガレット4個入り</th>
                    <th scope="col">美ら恋ガレット８個入り</th>
                    <th scope="col">宮古島スティック　バナナ</th>
                    <th scope="col">宮古島スティック　紅芋黒糖</th>
                    <th scope="col">宮古島スティック　黒糖</th>
                    <th scope="col">下地島専用宮古島スティック　6本入</th>
                    <th scope="col">バナナラスク　25ｇ</th>
                    <th scope="col">バナナラスク　3個入</th>
                    <th>発注日</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @foreach ($user->orders as $order)
                        <tr>
                            @if ($receive_date->isSameDay($order->receive_date))
                                <td>{{ $user->name }}</td>
                                <td scope="col">
                                    {{ $order->order1 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order2 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order3 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order4 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order5 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order6 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order7 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order8 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order9 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order10 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order11 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order12 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order13 }}
                                </td>
                                <td scope="col">
                                    {{ $order->order14 }}
                                </td>
                                <td>{{ $order->created_at }}</td>
                            @endif
                        </tr>
                    @endforeach
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
