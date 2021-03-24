{{-- For Editing Dietary Preferences --}}
@extends ('app')

@section('content')
    <div class="float-container">
        <div class="main">
            <div class="input">
                <form>
                    <form>
                        <label for="Keyword">Enter any allergies or ingredients, one at a time</label>
                        <br><br>
                        <input type="text" id="restriction" maxlength="30">
                        <input type="submit" value="Submit" id="submitRestriction"/>
                        <br>
                    </form>
                    <div class="chips" id="restrictionChips">
                      <div class="chip">
                          Fish <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                      </div>
                      <div class="chip">
                          Peanuts <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                      </div>
                    </div>
                    <input type="submit" value="Submit" id="submitRestrictions" class="bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-4 border-b-4 border-green-800 hover:border-green-500 rounded"/>
                </form>
            </div>
        </div>
    </div>
    <div class="float-container">
        <div class="Keywords">
        </div>
    </div>
@endsection
