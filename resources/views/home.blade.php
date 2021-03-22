@extends('app')

@section('content')
    <div class="float-container">
        <div class="main">
            {{-- Button for Random Recipe Generation (lead to /recipe) --}}
            <a href="{{ route('recipe') }}" type="button" class="bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-4 border-b-4 border-green-800 hover:border-green-500 rounded" id="random-btn"> Generate Recipe</a>
        </br>
        </br>

            <p>Carrot cake jujubes sweet roll sweet roll jujubes jelly-o sesame snaps. Pie tart dessert topping marshmallow powder sweet dragée cookie. Danish candy candy pie sesame snaps jelly-o. Cheesecake candy cake fruitcake pie cake sweet roll chocolate cake. Carrot cake pudding pie jelly beans gingerbread danish wafer. Chocolate cake dessert biscuit ice cream. Cotton candy toffee soufflé. Carrot cake cookie lollipop fruitcake. Candy canes sweet roll candy canes marzipan topping tootsie roll tootsie roll fruitcake apple pie. Cotton candy candy canes icing marzipan jelly-o. Bonbon muffin marzipan bear claw gingerbread candy gummies marshmallow gummi bears. Sweet cotton candy jelly chocolate. Cheesecake jelly beans sweet roll chocolate cotton candy.</p>

            <p>Cake dragée ice cream candy canes sweet oat cake fruitcake. Cookie carrot cake sesame snaps caramels pie bonbon gummies. Dragée lemon drops tootsie roll liquorice cotton candy muffin ice cream donut. Pastry lemon drops cupcake lemon drops jujubes dessert sweet cookie. Bonbon gummi bears carrot cake sugar plum chupa chups topping biscuit. Wafer cheesecake pie pastry sugar plum gummies tootsie roll chocolate cake. Marshmallow chocolate caramels pastry tootsie roll sesame snaps jelly-o bonbon tootsie roll. Gingerbread tootsie roll sesame snaps dessert. Pie cotton candy gummies tootsie roll lemon drops cake. Halvah cupcake chocolate oat cake dragée ice cream cupcake. Pie bonbon sugar plum tootsie roll jelly-o cheesecake ice cream caramels. Tootsie roll sugar plum sweet.</p>
    
        </div>
    </div>

@endsection
