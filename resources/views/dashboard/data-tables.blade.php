@extends('layouts.master');

@section('title')
    Data Tables
@endsection


@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}" />
    @endpush

    <table id="table-example" class="table table-bordered table-stripped">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Date</td>
                <td>Age</td>
                <td>Street</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Yvonne Guadalupe</td>
                <td>11/8/2010 00:22</td>
                <td>(498) 651-3883</td>
                <td>8229 Wilkins Pl, Lopezville VA 69659</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lopez Darin</td>
                <td>10/2/2004 13:47</td>
                <td>(709) 995-1872</td>
                <td>3848 Eloise Cir, Calvinville MO 79653</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Darin Simon</td>
                <td>2/26/2010 04:20</td>
                <td>(544) 279-9117</td>
                <td>2673 Glover Cir, Wilkinsburg MO 47548</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Miles Lela</td>
                <td>10/16/2018 01:44</td>
                <td>(919) 107-9231</td>
                <td>3052 Luis Pl, Smithburg HI 54058</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Luis Smith</td>
                <td>4/3/2010 13:07</td>
                <td>(861) 484-7952</td>
                <td>4484 Calvin Pl, Smithburg NY 86719</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Roosevelt Parker</td>
                <td>9/24/2000 02:25</td>
                <td>(900) 929-1775</td>
                <td>5391 Lucille Dr, Lelatown AR 59781</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Lucille Yvonne</td>
                <td>5/9/2011 04:42</td>
                <td>(493) 628-4704</td>
                <td>6650 Bishop Pl, Bishopville NV 67306</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Copeland Roosevelt</td>
                <td>1/5/2002 02:06</td>
                <td>(619) 140-9692</td>
                <td>3578 Copeland Blvd, Glovertown KY 84330</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Wilkins Copeland</td>
                <td>4/4/2012 10:26</td>
                <td>(831) 620-7576</td>
                <td>9089 Eloise Blvd, Tuckertown TX 65788</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Smith Lela</td>
                <td>2/13/2009 01:14</td>
                <td>(232) 130-8329</td>
                <td>9085 Wilkins Cir, Roosevelttown MN 23229</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Smith Smith</td>
                <td>8/27/2013 02:40</td>
                <td>(625) 140-7905</td>
                <td>9734 Eloise Pl, Lucilleburg NY 49702</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Tucker Guadalupe</td>
                <td>9/13/2003 14:41</td>
                <td>(311) 425-4114</td>
                <td>5526 Guadalupe Dr, Bishoptown SC 71320</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Parker Deanna</td>
                <td>5/19/2010 01:28</td>
                <td>(767) 889-2050</td>
                <td>7732 Simon St, Roosevelttown SC 36670</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Lucille Roosevelt</td>
                <td>4/19/2001 04:10</td>
                <td>(323) 848-2498</td>
                <td>9108 Wilkins Blvd, Rooseveltville KS 70966</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Lopez Lela</td>
                <td>7/23/2013 11:10</td>
                <td>(310) 696-3577</td>
                <td>8329 Smith Dr, Lucilletown MI 15594</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Guadalupe Simon</td>
                <td>8/6/2017 12:28</td>
                <td>(419) 465-5569</td>
                <td>8543 Lela Dr, Darintown HI 78961</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Copeland Wilkins</td>
                <td>5/20/2018 13:34</td>
                <td>(891) 952-3447</td>
                <td>8018 Yvonne Pl, Smithtown WA 14976</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Lela Lucille</td>
                <td>3/19/2021 00:01</td>
                <td>(321) 808-7001</td>
                <td>3173 Lela Cir, Tuckertown NM 36630</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Deanna Simon</td>
                <td>9/6/2002 10:04</td>
                <td>(210) 769-4751</td>
                <td>3981 Copeland St, Roosevelttown TX 53583</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Miles Tucker</td>
                <td>2/20/2005 11:11</td>
                <td>(494) 631-5743</td>
                <td>1135 Darin Pl, Luisburg MS 83191</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Lela Lucille</td>
                <td>7/21/2009 10:46</td>
                <td>(294) 709-5575</td>
                <td>2537 Parker Cir, Darinville CT 88323</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Yvonne Lucille</td>
                <td>5/17/2004 11:24</td>
                <td>(282) 336-4785</td>
                <td>5520 Roosevelt Dr, Eloiseville LA 76382</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Glover Darin</td>
                <td>9/18/2002 03:08</td>
                <td>(604) 321-8365</td>
                <td>1915 Eloise Dr, Copelandburg NC 27993</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Bishop Copeland</td>
                <td>8/21/2014 12:16</td>
                <td>(982) 805-1046</td>
                <td>4274 Lopez Cir, Glovertown SD 77744</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Guadalupe Eloise</td>
                <td>9/3/2001 10:00</td>
                <td>(572) 183-3381</td>
                <td>6421 Guadalupe Blvd, Yvonnetown NM 97837</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Lucille Smith</td>
                <td>11/20/2016 02:14</td>
                <td>(838) 497-1607</td>
                <td>5781 Yvonne Dr, Parkerburg OH 26159</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Parker Deanna</td>
                <td>5/18/2007 02:08</td>
                <td>(388) 886-4553</td>
                <td>7356 Parker Blvd, Deannaburg DC 59191</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Glover Deanna</td>
                <td>11/12/2008 10:12</td>
                <td>(979) 632-2281</td>
                <td>9467 Copeland Cir, Wilkinstown VA 51303</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Miles Yvonne</td>
                <td>4/19/2019 03:05</td>
                <td>(916) 822-7670</td>
                <td>433 Calvin Dr, Simonville MT 44189</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Parker Smith</td>
                <td>9/24/2008 01:23</td>
                <td>(860) 308-7660</td>
                <td>707 Parker Pl, Smithburg ID 20801</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Tucker Luis</td>
                <td>5/17/2005 03:40</td>
                <td>(728) 798-2040</td>
                <td>2720 Deanna Cir, Parkertown AL 77397</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Lela Eloise</td>
                <td>4/1/2011 00:12</td>
                <td>(998) 232-4528</td>
                <td>4806 Darin Cir, Simonburg SC 23069</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Yvonne Calvin</td>
                <td>4/12/2021 14:25</td>
                <td>(726) 739-7888</td>
                <td>9728 Calvin Cir, Lucilleville DE 41837</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Copeland Lucille</td>
                <td>6/15/2003 12:38</td>
                <td>(219) 619-7682</td>
                <td>5605 Lopez Pl, Roosevelttown ID 87878</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Lopez Luis</td>
                <td>1/5/2009 00:10</td>
                <td>(584) 863-1604</td>
                <td>5306 Lopez Pl, Lelaburg ID 40162</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Copeland Copeland</td>
                <td>3/19/2019 13:05</td>
                <td>(579) 373-7706</td>
                <td>2126 Simon Cir, Simontown UT 29114</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Calvin Guadalupe</td>
                <td>5/7/2012 11:16</td>
                <td>(291) 196-3369</td>
                <td>3428 Miles Blvd, Lelatown AZ 17297</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Guadalupe Roosevelt</td>
                <td>8/12/2021 13:36</td>
                <td>(250) 758-1152</td>
                <td>765 Wilkins Pl, Lucilleville CO 75175</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Glover Simon</td>
                <td>4/20/2015 13:08</td>
                <td>(551) 302-6114</td>
                <td>7580 Eloise Dr, Lelatown KY 73353</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Lela Smith</td>
                <td>6/27/2003 11:15</td>
                <td>(434) 405-1781</td>
                <td>5806 Miles St, Milestown KS 51389</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Lopez Roosevelt</td>
                <td>8/1/2018 11:05</td>
                <td>(341) 260-9413</td>
                <td>3195 Yvonne Pl, Calvintown NV 17769</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Luis Miles</td>
                <td>11/9/2008 02:43</td>
                <td>(423) 102-9786</td>
                <td>742 Parker Dr, Deannaville VA 72803</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Parker Luis</td>
                <td>3/21/2018 12:32</td>
                <td>(726) 713-7715</td>
                <td>2546 Luis St, Bishopburg NJ 59833</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Glover Wilkins</td>
                <td>1/15/2019 14:36</td>
                <td>(925) 565-1135</td>
                <td>4085 Smith Cir, Parkerburg IN 94705</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Tucker Wilkins</td>
                <td>5/15/2008 03:45</td>
                <td>(644) 787-9590</td>
                <td>192 Wilkins Blvd, Simonville IN 35244</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Miles Simon</td>
                <td>1/23/2006 00:31</td>
                <td>(811) 452-7221</td>
                <td>2837 Wilkins Blvd, Eloisetown WI 86913</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Guadalupe Wilkins</td>
                <td>11/17/2021 11:36</td>
                <td>(780) 153-3112</td>
                <td>3774 Smith Dr, Luistown ME 15411</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Darin Glover</td>
                <td>1/23/2020 01:08</td>
                <td>(579) 367-2434</td>
                <td>5577 Guadalupe St, Simontown MT 95523</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Parker Parker</td>
                <td>9/19/2018 01:33</td>
                <td>(998) 754-1746</td>
                <td>1409 Luis Cir, Lucilleville DE 26643</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Roosevelt Roosevelt</td>
                <td>1/16/2020 02:31</td>
                <td>(375) 139-4048</td>
                <td>5463 Guadalupe Blvd, Gloverburg IN 75124</td>
            </tr>

        </tbody>
    </table>

    @push('scripts')
        <script src="{{asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <script>
            $(function () {
                $('#table-example').DataTable();
            });
        </script>
    @endpush
@endsection
