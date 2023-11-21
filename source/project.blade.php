@extends('_layouts.main')

@section('body')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Projects</h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Project Words Start -->
<div class="container-xxl">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Valued Customers</h1>
                <div class="collaborators-container">
                    <ul class="collaborators-list">
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project Words End -->

<!-- Project Start -->
<div class="container my-5">
    <div class="card card-primary">
        <div class="card-header" style="border-radius: 0.25rem 0.25rem 0 0 !important;">
            <div class="card-tools" style="float: right; margin-right: -0.625rem;">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
            <h3 class="card-title">Inspection and NDT</h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Customer</th>
                        <th>Project Description</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>SGS Malaysia Sdn Bhd</td>
                        <td>Heating Coil Inspection NDT at Bertam FPSO</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Budiman Inspection Sdn Bhd</td>
                        <td>LRUT Inspection for 12" piping GAF System (TNB Manjung)</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Magna-Mitre Sdn Bhd</td>
                        <td>Provision of Integrity Assessment, Inspection and Disposal Schedule waste of Continuously Oil Contaminated (COC), Accidently Oil Contaminated (AOC) System in Petronas LNG Complex</td>
                        <td>2015 - current</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>IME Sdn Bhd</td>
                        <td>Rope Access Team for PFPSO - West Desaru Mopu</td>
                        <td>2015 - current</td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td>IME Sdn Bhd</td>
                        <td>Rope Access Team for PFPSO - Cendor Platform</td>
                        <td>2015 - current</td>
                    </tr>
                    <tr>
                        <th>6</th>
                        <td>Talisman Malaysia Limited</td>
                        <td>Spray Pig Loop Test</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>7</th>
                        <td>Alam Hidro (M) Sdn Bhd</td>
                        <td>BKA Pipeline Spool Repair on Board Crest Odessey-2</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>8</th>
                        <td>Velosi Specialised Inspection Sdn Bhd</td>
                        <td>Provision of Radiography Testing at South Angsi Platform</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>9</th>
                        <td>Danamin (M) Sdn Bhd</td>
                        <td>Perform Cscan Inspection at Petron Port Dickson</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>10</th>
                        <td>Nadi Marine Sdn Bhd</td>
                        <td>Perform MPI Inspection at Perisai Pacific 101</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>11</th>
                        <td>NDE Consultancy Services Sdn Bhd</td>
                        <td>Perform Cscan at PGB Kerteh</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>12</th>
                        <td>Bumitech Inspection Sdn Bhd</td>
                        <td>Perform LRUT at PDB Sepangar Sabah</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>13</th>
                        <td>Lotte Chemical Titan (M) Sdn Bhd</td>
                        <td>Boroscope Inspection</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>14</th>
                        <td>Pioneer Engineering Sdn Bhd</td>
                        <td>Provision of Mechanical Integrity Assessment at PDB Bintulu Terminal</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>15</th>
                        <td>ROSEN Inspection Asia Pacific S/B</td>
                        <td>Test Loop Assembly and Test Run Assistance</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>16</th>
                        <td>Lotte Chemical Titan (M) Sdn Bhd</td>
                        <td>NDT Inspection Storage Tank</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>17</th>
                        <td>Innovative Oilfield Services</td>
                        <td>Perform Marine Growth Preventor removal via rope access</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>18</th>
                        <td>Petrovietnam Technical Services Corporation (PTSC) Malaysia</td>
                        <td>Provision of BOC-BOD Pipeline Integrity & Stuck Pig Review 26" spoolpiece Storage, Preservation, Fabrication & Testing</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>19</th>
                        <td>Nadi Marine Sdn Bhd</td>
                        <td>MPI Job at Tanjung Pelepas</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>20</th>
                        <td>Petronas Dagangan Berhad</td>
                        <td>Price Agreement (PA) of Inspection Services for Product Tanks, Pressure Vessel and Piping at PDB Terminal (Eastern & Central)</td>
                        <td>2014 - current</td>
                    </tr>
                    <tr>
                        <th>21</th>
                        <td>Murphy Oil - Aviation</td>
                        <td>Aviation Consultancy Services</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>22</th>
                        <td>Petronas Dagangan Berhad</td>
                        <td>NDT Services - KLIA Fuel Terminal</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>23</th>
                        <td>Petronas Dagangan Berhad</td>
                        <td>Pipeline Integrity Test And Inspection</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>24</th>
                        <td>Petronas Gas Berhad</td>
                        <td>Pipe Support Repair at PGMS</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>25</th>
                        <td>Petronas Dagangan Berhad</td>
                        <td>Tank Integrity Inspection</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>26</th>
                        <td>Petronas Dagangan Berhad</td>
                        <td>Tank Inspection - Langkawi Fuel Terminal</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>27</th>
                        <td>Velosi Specialised Inspection S/B</td>
                        <td>Provision of Radiography Testing - PM3S - BRA</td>
                        <td>2014 - current</td>
                    </tr>
                    <tr>
                        <th>28</th>
                        <td>Murphy Oil</td>
                        <td>Advance NDT. Provision for PAUT LRUT C-Scan Inspection for SEP-A GOP-A/B BORF and KIKEH</td>
                        <td>2013</td>
                    </tr>
                    <tr>
                        <th>29</th>
                        <td>Murphy Oil - Aviation</td>
                        <td>Aviation Consultancy Services</td>
                        <td>2013</td>
                    </tr>
                    <tr>
                        <th>30</th>
                        <td>Talisman Malaysia Limited</td>
                        <td>NDT Services</td>
                        <td>2013</td>
                    </tr>
                    <tr>
                        <th>31</th>
                        <td> Titan Petchem</td>
                        <td>Piping Inspection via Rope Access</td>
                        <td>2013</td>
                    </tr>
                    <tr>
                        <th>32</th>
                        <td>Talisman - PESB</td>
                        <td>Pressure Vessels Piping Inspection via Rope Access</td>
                        <td>2013</td>
                    </tr>
                    <tr>
                        <th>33</th>
                        <td>Talisman - PESB</td>
                        <td>Cooler Inspection </td>
                        <td>2013</td>
                    </tr>
                    <tr>
                        <th>34</th>
                        <td>Petronas Polly Ethylene - PESB</td>
                        <td>Advance Ndt</td>
                        <td>2013</td>
                    </tr>
                    <tr>
                        <th>35</th>
                        <td>Johawaki Sdn Bhd</td>
                        <td>Forensic Testing - NDT / Concrete Inspection at Hospital Besar Kuala Lumpur</td>
                        <td>2013</td>
                    </tr>
                    <tr>
                        <th>36</th>
                        <td>G-Pile</td>
                        <td>NDT Services</td>
                        <td>2013</td>
                    </tr>
                    <tr>
                        <th>37</th>
                        <td>Petronas Penapisan Melaka</td>
                        <td>Tank Inspection via Rope Access</td>
                        <td>2012</td>
                    </tr>
                    <tr>
                        <th>38</th>
                        <td>Huntsman Tioxide</td>
                        <td>LRUT - Piping Inspection</td>
                        <td>2012</td>
                    </tr>
                    <tr>
                        <th>39</th>
                        <td>TWI</td>
                        <td>NDT Services - UUTM</td>
                        <td>2012</td>
                    </tr>
                    <tr>
                        <th>40</th>
                        <td>Pioneer Engineering Sdn Bhd</td>
                        <td>CHESS - Blasting & Painting job via Rope Access</td>
                        <td>2011 - 2013</td>
                    </tr>
                    <tr>
                        <th>41</th>
                        <td>Murphy Oil Corp (Srwk)</td>
                        <td>Price Agreements NDT Services</td>
                        <td>2011 - 2013</td>
                    </tr>
                    <tr>
                        <th>42</th>
                        <td>Petronas Gas Berhad</td>
                        <td>LRUT Inspection and Coating Repair for PGU Metering Station</td>
                        <td>2011 - 2013</td>
                    </tr>
                    <tr>
                        <th>43</th>
                        <td>Titan Chemicals</td>
                        <td>Cleaning Reactor Shell via Rope Access</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>44</th>
                        <td>Pioneer Engineering Sdn Bhd</td>
                        <td>Phase Array Inspection for HX at Talisman South Angsi</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>45</th>
                        <td>NRS Associates</td>
                        <td>Structure and Assessment Integrity at TNB Kg. Limau</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>46</th>
                        <td>Titan Chemicals</td>
                        <td>1 Unit of Binding SILO Repair using Rope Access</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>47</th>
                        <td>FPSO Ventures Sdn Bhd</td>
                        <td>Flare Tip Inspection</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>48</th>
                        <td>FPSO Ventures Sdn Bhd</td>
                        <td>Vessel & Piping Integrity Assessment at FPSO Bunga Kertas</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>49</th>
                        <td>OceanCare Sdn Bhd</td>
                        <td>Eddy Current Testing on Cross Arm at Murphy Labuan Warehouse</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>50</th>
                        <td>Huntsman Tioxide</td>
                        <td>Annual Shutdown - Inspection of Vessels and Piping (Advance NDT - LRUT)</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>51</th>
                        <td>GPP - NDE Consultancy</td>
                        <td>Advance NDT</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>52</th>
                        <td>Titan Chemicals</td>
                        <td>Asid Pickling at Titan Chemicals Plant Pasir Gudang</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>53</th>
                        <td>FPSO Ventures Sdn Bhd</td>
                        <td>Painting & Blasting via Rope Access on Mongkey Island at FPSO Bunga Kertas</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>54</th>
                        <td>FPSO Ventures Sdn Bhd</td>
                        <td>Load Test & MPI on Cargo Handling Equipment</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>55</th>
                        <td>OceanCare Sdn Bhd</td>
                        <td>PAUT Inspection on Flowline at Murphy Oil Golok Platform</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>56</th>
                        <td>OceanCare Sdn Bhd</td>
                        <td>PAUT Inspection on Riser at Murphy Oil Golok Platform</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>57</th>
                        <td>Careion Technologist Sdn Bhd</td>
                        <td>C-Scan at Kumang Cluster Onshore MLNG2 for Petra Resources</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>58</th>
                        <td>Careion Technologist Sdn Bhd</td>
                        <td>C-Scan at Diesel Storage Tank BCOT Bintulu for Lutong Brothers</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>59</th>
                        <td>Careion Technologist Sdn Bhd</td>
                        <td>B-Scan on Tank at KSB for Schlumberger</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>60</th>
                        <td>Careion Technologist Sdn Bhd</td>
                        <td>Sulfur Storage Tank Inspection for Flexsys</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>61</th>
                        <td>Careion Technologist Sdn Bhd</td>
                        <td>Abi Scan & ECT via Rope Access at Chendor MOPU</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>62</th>
                        <td>Careion Technologist - Petronas LPG</td>
                        <td>UTTM for sphere Tank using Rope Access at LPG Klang</td>
                        <td>2010</td>
                    </tr>
                    <tr>
                        <th>63</th>
                        <td>Talisman Malaysia Limited</td>
                        <td>BRE MEMGUARD PRESSURE VESSEL - External Visual Inspection, Thermography and 100% UT TOFD</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>64</th>
                        <td>Nippon Oil Exploration (Malaysia) Ltd.</td>
                        <td>Provision of Interim Inspection Services for Nippon's Onshore and Offshore Activities</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>65</th>
                        <td>M3Nergy FPSO Perintis Sdn Bhd</td>
                        <td>CARGO OIL TANK (COT) 4 & 6 CENTRE - ROPE ACCESS CLOSE-UP SURVEY AND THICKNESS GAUGING</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>66</th>
                        <td>Talisman Malaysia Limited</td>
                        <td>Rope Access Inspection Campaign - Process Piping for Gas Platform Bunga Raya Echo.</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>67</th>
                        <td>Talisman Malaysia Limited</td>
                        <td>Rope Access Inspection Campaign - Process Piping and Riser for PM3 Main Platform and 7 Satellite Platforms.</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>68</th>
                        <td>Optimal Chemical Sdn Bhd</td>
                        <td>NDt Services for Heat Exchanger, Pressure Vessel & Fabrication Project - Shutdown Replacement Equipment.</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>69</th>
                        <td>Kerteh Terminal Sdn Bhd</td>
                        <td>Rope access integrity inspection - Provision of Ultrasonic Thickness measurement, visual inspection, corrosion mapping & acoustic emission testing on 3 units of Spherical Tanks.</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>70</th>
                        <td>FPG Oleochemical</td>
                        <td>Turnaround 2008 - Corrosion Monitoring B-Scan on 3 units Cooler.</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <th>71</th>
                        <td>Talisman Malaysia Limited</td>
                        <td>Rope Access Corrosion monitoring on flow lines for PM3 Satellite Platforms Bunga Raya Charlie and Bunga Raya Delta.</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <th>72</th>
                        <td>Trenergy FPSO Sdn Bhd</td>
                        <td>Integrity Inspection - Statutory Equipment - UTTM, Visual inspection & Corrosion Monitoring CSCAN.</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <th>73</th>
                        <td>Trenergy FPSO Sdn Bhd</td>
                        <td>Integrity inspection - Process Piping Rope Access UTTM & Visual Inspection.</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <th>74</th>
                        <td>Perwaja Steel Sdn Bhd</td>
                        <td>NDt Services for Heat Exchanger Fabrication Project - Shutdown Replacement Equipment.</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <th>75</th>
                        <td>Makhostia Utilities Sdn Bhd</td>
                        <td>Corrosion Mapping on Pressure Vessel & NDt Eddy Current Tube Inspection for Condensor Unit Shutdown Job for GDC KLCC PLant</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <th>76</th>
                        <td>Careion Technologist Malaysia San Bhd</td>
                        <td>Rope Access Inspection and NDT on Jacket Leg and Flare Tower Piping at PM3 Field Talisman Malaysia Limited.</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <th>77</th>
                        <td>INTISARI MULIA ENGINEERING SDN BHD</td>
                        <td>Corrosion mapping Ultrasonic CSCAN via Rope Access for South Angsi MOAB lines at SAA Field Talisman (M) Ltd.</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <th>78</th>
                        <td>Makhostia Utilities Sdn Bhd</td>
                        <td>Corrosion Mapping on Cooling Water Piping for GDC KLCC Plant</td>
                        <td>2007</td>
                    </tr>
                    <tr>
                        <th>79</th>
                        <td>INTISARI MULIA ENGINEERING SDN BHD</td>
                        <td>Piping Integrity Inspection via Rope Access for PM3 Satellite Platforms at PM3 Field Talisman Malaysia Limited – Bunga Raya Alpha, Delta, Bravo, Bunga Kekwa Alpha, Charlie, Bunga Seroja alpha & Bunga Tulip Alpha.</td>
                        <td>2007</td>
                    </tr>
                    <tr>
                        <th>80</th>
                        <td>Careion Technologist Malaysia Sdn Bhd</td>
                        <td>LRUT on PM3 Export & Import Risers at PM3 Satellite platforms for Talisman (M) Ltd.</td>
                        <td>2007</td>
                    </tr>
                    <tr>
                        <th>81</th>
                        <td>INTISARI MULIA ENGINEERING SDN BHD</td>
                        <td>Corrosion mapping Ultrasonic CSCAN via Rope Access for Bunga Kekwa Satellite flow lines at PM3 Field Talisman (M) Ltd.</td>
                        <td>2007</td>
                    </tr>
                    <tr>
                        <th>82</th>
                        <td>INTISARI MULIA ENGINEERING SDN BHD</td>
                        <td>Corrosion mapping Ultrasonic CSCAN via Rope Access for Bunga Kekwa Satellite flow lines at PM3 Field Talisman (M) Ltd.</td>
                        <td>2007</td>
                    </tr>
                    <tr>
                        <th>83</th>
                        <td>INTISARI MULIA ENGINEERING SDN BHD</td>
                        <td>Corrosion mapping Ultrasonic CSCAN via Rope Access for Bunga Kekwa Satellite flow lines at PM3 Field Talisman (M) Ltd.</td>
                        <td>2007</td>
                    </tr>
                    <tr>
                        <th>84</th>
                        <td>INTISARI MULIA ENGINEERING SDN BHD</td>
                        <td>Corrosion mapping Ultrasonic CSCAN via Rope Access for Bunga Kekwa Satellite flow lines at PM3 Field Talisman (M) Ltd.</td>
                        <td>2007</td>
                    </tr>
                    <tr>
                        <th>85</th>
                        <td>NDT PHILIPPINES INSPECTION SERVICES CORPORATION</td>
                        <td>NDT Long Range Ultrasonic for Tank Farm Piping Corrosion Monitoring at Caltex Chevron Inc. Batangas Tank Farm, Philippines.</td>
                        <td>2005</td>
                    </tr>
                    <tr>
                        <th>86</th>
                        <td>EDARAN ASIA PTD LTD</td>
                        <td>Consultancy services for Quality Manual System - Process piping fabrication project compliance with API/ASME Code of Practices.</td>
                        <td>2005</td>
                    </tr>
                    <tr>
                        <th>87</th>
                        <td>NDT PHILIPPINES INSPECTION SERVICES CORPORATION</td>
                        <td>Third Party Verification for API653</td>
                        <td>2004 to 2007</td>
                    </tr>
                    <tr>
                        <th>88</th>
                        <td>M3Nergy FPSO SDN BHD</td>
                        <td>On-stream Inspection and evaluation for Perintis FPSO process piping via Ultrasonic C-scan, Ultrasonic Thickness Gauging Measurement and Radiographic Profile for corrosion evaluation.</td>
                        <td>2004</td>
                    </tr>
                    <tr>
                        <th>89</th>
                        <td>TENAGA NASIONAL ENGINEERING & CONSTRUCTION (M) SDN BHD</td>
                        <td>Transfer of MPO at Prai Power Station</td>
                        <td>2004</td>
                    </tr>
                    <tr>
                        <th>90</th>
                        <td>TENAGA NASIONAL ENGINEERING & CONSTRUCTION (M) SDN BHD</td>
                        <td>Quality Assurance and Control Project Development Package</td>
                        <td>2002</td>
                    </tr>
                    <tr>
                        <th>91</th>
                        <td>DET NORSKE VERITAS AS SDN BHD</td>
                        <td>Provision of Pressure Vessel Surveyor for Petronas Gas Receipt Gas Station Miri, Sarawak</td>
                        <td>2001</td>
                    </tr>
                    <tr>
                        <th>92</th>
                        <td>TOYO ENGINEERING & CONSTRUCTION (M) SDN BHD</td>
                        <td>Provision of project inspector for UPP Project in Fabrication of Statutory Equipment Fabrication.</td>
                        <td>2000 to 2001</td>
                    </tr>
                    <tr>
                        <th>93</th>
                        <td>DET NORSKE VERITAS AS SDN BHD</td>
                        <td>Provision of project inspector for AMP2 Project</td>
                        <td>2000</td>
                    </tr>
                    <tr>
                        <th>94</th>
                        <td>BERKAT GLOBAL SDN BHD</td>
                        <td>Marine Warranty Verification Services for Nippon Steel Construction</td>
                        <td>1999 to 2004</td>
                    </tr>
                    <tr>
                        <th>95</th>
                        <td>DET NORSKE VERITAS AS SDN BHD</td>
                        <td>Provision of Welding Inspector for Rig Trident 16, Miri Offshore Project</td>
                        <td>1999</td>
                    </tr>
                    <tr>
                        <th>96</th>
                        <td>DET NORSKE VERITAS AS SDN BHD</td>
                        <td>Structural inspection for Skud Beam on Deck Excellot Offshore Miri</td>
                        <td>1999</td>
                    </tr>
                    <tr>
                        <th>97</th>
                        <td>TOYO ENGINEERING & CONSTRUCTION (M) SDN BHD</td>
                        <td>Provision of project inspector for FPG Oleochemical Plant Extension Project</td>
                        <td>1998 to 1999</td>
                    </tr>
                    <tr>
                        <th>98</th>
                        <td>DET NORSKE VERITAS AS SDN BHD</td>
                        <td>Coating Inspection for EPCC - MPP at Bredero Price Kuantan Port</td>
                        <td>1998</td>
                    </tr>
                    <tr>
                        <th>99</th>
                        <td>METAL PIPELINE ENDUR SDN BHD</td>
                        <td>Provision of Welding Inspector for Structural, JGC Pulau Seraya Project</td>
                        <td>1998</td>
                    </tr>
                    <tr>
                        <th>100</th>
                        <td>KEJURUTERAAN KOTA AMAN SDN BHD</td>
                        <td>Provision of Ultrasonic Testing for Petronas Gas, PGU III Project Metering Station</td>
                        <td>1996</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <br>
    <div class="card card-primary">
        <div class="card-header" style="border-radius: 0.25rem 0.25rem 0 0 !important;">
            <div class="card-tools" style="float: right; margin-right: -0.625rem;">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
            <h3 class="card-title">Fabrication, Manufacturing, Maintenance and Repair</h3>
        </div>
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Customer</th>
                        <th>Project Description</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Lloyds Register Technical Sdn Bhd</td>
                        <td>10" Test Loop - Fabricate and run testing for TML</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Alam Hidro (M) Sdn Bhd</td>
                        <td>Fabrication of underwater bypass spool for 4" gas lift from BRB to BSA</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Lloyds Register Technical Sdn Bhd</td>
                        <td>10" Test Loop - Fabricate and run testing for TML</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>Alam Hidro (M) Sdn Bhd</td>
                        <td>Fabrication of underwater bypass spool for 4" gas lift from BRB to BSA</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td>Petrovietnam Technical Services Corporation (PTSC) Malaysia</td>
                        <td>Rental for 6 months storage yard at Balok Kuantan cw relevant facilities & maintenance services</td>
                        <td>2014-2015</td>
                    </tr>
                    <tr>
                        <th>6</th>
                        <td>Lloyds Register Technical Sdn Bhd</td>
                        <td>10" Test Loop - Fabricate and run testing for TML</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>7</th>
                        <td>Alam Hidro (M) Sdn Bhd</td>
                        <td>Fabrication of underwater bypass spool for 4" gas lift from BRB to BSA</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>8</th>
                        <td>Petrovietnam Technical Services Corporation (PTSC) Malaysia</td>
                        <td>Rental for 6 months storage yard at Balok Kuantan cw relevant facilities & maintenance services</td>
                        <td>2014-2015</td>
                    </tr>
                    <tr>
                        <th>9</th>
                        <td>Shapadu / Rekayasa</td>
                        <td>Lube Blending Tank</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>10</th>
                        <td>Shapadu / Rekayasa</td>
                        <td>Launcher Receiver</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>11</th>
                        <td>Lloyds Register Technical Sdn Bhd</td>
                        <td>10" Test Loop - Fabricate and run testing for TML</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>12</th>
                        <td>Alam Hidro (M) Sdn Bhd</td>
                        <td>Fabrication of underwater bypass spool for 4" gas lift from BRB to BSA</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>13</th>
                        <td>Petrovietnam Technical Services Corporation (PTSC) Malaysia</td>
                        <td>Rental for 6 months storage yard at Balok Kuantan cw relevant facilities & maintenance services</td>
                        <td>2014-2015</td>
                    </tr>
                    <tr>
                        <th>14</th>
                        <td>Shapadu / Rekayasa</td>
                        <td>Lube Blending Tank</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>15</th>
                        <td>Shapadu / Rekayasa</td>
                        <td>Launcher Receiver</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>16</th>
                        <td>JGC Corp / Argonaut</td>
                        <td>Stabilizer Column - PT Polytama Propindo Indonesia</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>17</th>
                        <td>Sallehuddin Power Station</td>
                        <td>Pressure Transmittal Vessel, Port Klang</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>18</th>
                        <td>Petra Fabricators Sdn Bhd</td>
                        <td>Thinning & Monomer Tank - Cray Valley Project</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>19</th>
                        <td>Petra Fabricators Sdn Bhd</td>
                        <td>Crude Oil Custody Transfer Metering Skid - Gaspian Sea FSO</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>20</th>
                        <td>JGC Corp.</td>
                        <td>Gas Metering Skid - Thai Lube Oil Project</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>21</th>
                        <td>Bestwide Engineering Sdn Bhd</td>
                        <td>Chemical Injection Skid - EPMI Bunga Seroja Platform</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th>22</th>
                        <td>ROSEN Inspection Asia Pacific S/B</td>
                        <td>Test Loop Assembly and Test Run Assistance</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th>23</th>
                        <td>Petronas Gas Berhad</td>
                        <td>Provision Pipe support Replacement At PGU Phase III at Regulator Metering Skids at PGM, Pasir Gudang, Johor</td>
                        <td>2013</td>
                    </tr>
                    <tr>
                        <th>24</th>
                        <td>Petronas Gas Berhad</td>
                        <td>Provision of Blasting & Painting at PGMS Metering Station</td>
                        <td>2013</td>
                    </tr>
                    <tr>
                        <th>25</th>
                        <td>Petronas Carigali Sdn Bhd</td>
                        <td>Provision Tilted Perform V3010/3080 Reinstatement Carigali - PMO</td>
                        <td>2012</td>
                    </tr>
                    <tr>
                        <th>26</th>
                        <td>Polyplastic Asia Pacific Sdn Bhd <br> (EPCC is Oversea Technical Engineering & Construction Pte Ltd)</td>
                        <td>Fabrication and erection of 1 unit of Demin Water Storage Tank c/w Distribution Piping System at MP2 Project</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>27</th>
                        <td>Kaneka Polymer Plastic (M) Sdn Bhd <br> (EPCC Company is Mitsubishi Kokaki Kaisha Pte Ltd)</td>
                        <td>Fabrication and erection of 1 unit of Water Storage Tank at Kaneka MEP Project</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>28</th>
                        <td>Polyplastic Asia Pacific Sdn Bhd <br> (EPCC is Oversea Technical Engineering & Construction Pte Ltd)</td>
                        <td>Fabrication and erection of 1 unit of Demin Water Storage Tank c/w Distribution Piping System at MP2 Project</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>29</th>
                        <td>FPSO Ventures Sdn Bhd</td>
                        <td>Provision of Manpower, Material, equipments, tools and consumables for heat Exchanger (E-1710 and E-17508) Cleaning Works onboard FPSO Bunga Kertas</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>30</th>
                        <td>Petronas Carigali Sdn Bhd</td>
                        <td>Provision of heat exchanger inspection and specialist services, Petronas Carigali Sdn Bhd, Peninsular Malaysia Operations (PMO).</td>
                        <td>2011</td>
                    </tr>
                    <tr>
                        <th>31</th>
                        <td>Sunpower Melaka Solar Manufacturing (M) Sdn Bhd <br> (EPCC Company is PT Technic Engineering Sdn Bhd)</td>
                        <td>EPCC of Diesel Storage Tank c/w Distribution Piping Works</td>
                        <td>2010</td>
                    </tr>
                    <tr>
                        <th>32</th>
                        <td>FPSO Ventures Sdn Bhd</td>
                        <td>Provision of Manpower, Material, equipments, tools and consumables for heat Exchanger (E-1710 and E-17508) Cleaning Works onboard FPSO Bunga Kertas</td>
                        <td>2010</td>
                    </tr>
                    <tr>
                        <th>33</th>
                        <td>Petronas Carigali Sdn Bhd</td>
                        <td>Provision of heat exchanger inspection and specialist services, Petronas Carigali Sdn Bhd, Peninsular Malaysia Operations (PMO).</td>
                        <td>2010</td>
                    </tr>
                    <tr>
                        <th>34</th>
                        <td>Kaneka Polymer Plastic (M) Sdn Bhd <br> (EPCC Company is Mitsubishi Kokaki Kaisha Pte Ltd)</td>
                        <td>Fabrication and erection of 1 unit of Water Storage Tank at Kaneka MEP Project</td>
                        <td>2010</td>
                    </tr>
                    <tr>
                        <th>35</th>
                        <td>Petronas Carigali Sdn Bhd</td>
                        <td>Provision to supply manpower, material, equipment for to perform Cleaning on printed circuit Heat Exchanger, E2430</td>
                        <td>2010</td>
                    </tr>
                    <tr>
                        <th>36</th>
                        <td>M3nergy FPSO Perintis Sdn Bhd</td>
                        <td>3rd Party Inspection and Expeditor for piping Fabrication</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>37</th>
                        <td>M3nergy FPSO Perintis Sdn Bhd</td>
                        <td>Mechanical Repair and Chemical Cleaning for 2009 Shutdown</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>38</th>
                        <td>Careion Technologist - Kerteh Terminal Sdn Bhd</td>
                        <td>AE Probe Installation for Sphere Tank using Rope Access at KTSB</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>39</th>
                        <td>Sunpower Melaka Solar Manufacturing (M) Sdn Bhd <br> (EPCC Company is PT Technic Engineering Sdn Bhd)</td>
                        <td>EPCC of Diesel Storage Tank c/w Distribution Piping Works</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>40</th>
                        <td>FPSO Ventures Sdn Bhd</td>
                        <td>Provision of Manpower, Material, equipments, tools and consumables for heat Exchanger (E-1710 and E-17508) Cleaning Works onboard FPSO Bunga Kertas</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>41</th>
                        <td>Petronas Carigali Sdn Bhd</td>
                        <td>Provision of heat exchanger inspection and specialist services, Petronas Carigali Sdn Bhd, Peninsular Malaysia Operations (PMO).</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>42</th>
                        <td>Petronas Penapisan (Melaka) Sdn Bhd <br> (EPCC Company is PT Technic Engineering Sdn Bhd)</td>
                        <td>Fabrication and erection of 7 units of Water Storage Tanks at MG3 Project c/w Tank Farm Interconnection Piping Works</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>43</th>
                        <td>PETRONAS CARIGALI SDN BHD</td>
                        <td>Provision of Heat Exchanger Inspection and Specialist Service, for PCSB, Peninsular Malaysia (PMO).</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <th>44</th>
                        <td>Makhostia Utilities Sdn Bhd</td>
                        <td>Mechanical work for Gas District Cooling KLCC on Evaporator, Condenser, Intercooler & Lube oil cooler.</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <th>45</th>
                        <td>Port Tanjung Langsat Sdn Bhd <br> (EPCC Company is Saga Dialog Sdn Bhd)</td>
                        <td>Fabrication and erection of 2 units of Diesel Storage Tanks at Langsat Terminal One and Langsat CTF c/w Interconnecting Piping in Tank Farm at Tanjung Langsat Johor</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <th>46</th>
                        <td>CENSERV SDN BHD</td>
                        <td>Fabrication of 6 units of Oil Cooler Heat Exchanger & 1 unit Titanium Bundle.</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <th>47</th>
                        <td>EDARAN ASIA Ptd Ltd</td>
                        <td>Consultancy for Welding and Fabrication QMS for Structural and Pipeline Works - Batam Indonesia Project</td>
                        <td>2006</td>
                    </tr>
                    <tr>
                        <th>48</th>
                        <td>POLYETHYLENE MALAYSIA SDN BHD</td>
                        <td>Installation of sleeves, support plate bars and flange. Bolts and nuts replacement for top nozzle of SILO PE-1-880B</td>
                        <td>2005</td>
                    </tr>
                    <tr>
                        <th>49</th>
                        <td>TNB ENGINEERING CORPORATION SDN BHD</td>
                        <td>Transfer of MPO at Prai Power Station - Fabrication of metering pump skid.</td>
                        <td>2004</td>
                    </tr>
                    <tr>
                        <th>50</th>
                        <td>POLYETHYLENE MALAYSIA SDN BHD</td>
                        <td>Repair and fabrication of SILO 880A and 880B</td>
                        <td>2004</td>
                    </tr>
                    <tr>
                        <th>51</th>
                        <td>ETHYLENE MALAYSIA SDN BHD</td>
                        <td>Fabrication and supply of bell mouth for cracking heater's induced draft fan motor</td>
                        <td>2004</td>
                    </tr>
                    <tr>
                        <th>52</th>
                        <td>POLYETHYLENE MALAYSIA SDN BHD</td>
                        <td>Repair and fabrication of SILO 880A and 880B</td>
                        <td>2004</td>
                    </tr>
                    <tr>
                        <th>53</th>
                        <td>ETHYLENE MALAYSIA SDN BHD</td>
                        <td>Fabrication and supply of bell mouth for cracking heater's induced draft fan motor</td>
                        <td>2004</td>
                    </tr>
                    <tr>
                        <th>54</th>
                        <td>ETHYLENE MALAYSIA SDN BHD</td>
                        <td>Supply of Burner modification kit including fittings and site installation</td>
                        <td>2003</td>
                    </tr>
                    <tr>
                        <th>55</th>
                        <td>TENAGA NASIONAL ENGINEERING & CONSTRUCTION (M) SDN BHD</td>
                        <td>EPCC Distilate Line from Marine Jetty to Tank Farm for TNB SJSI Power Plant Pasir Gudang.</td>
                        <td>2002</td>
                    </tr>
                    <tr>
                        <th>56</th>
                        <td>POLYETHYLENE MALAYSIA SDN BHD</td>
                        <td>Modifying broken tube, installation of sleeves and installation of support plate bars for SILO PE-1-880A</td>
                        <td>2002</td>
                    </tr>
                    <tr>
                        <th>57</th>
                        <td>ETHYLENE MALAYSIA SDN BHD</td>
                        <td>Fabrication and site installation of 6-inch cracking heater's decoking effluent line</td>
                        <td>2002</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<!-- Project End -->
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Select the button with data-card-widget="collapse" attribute
        $('[data-card-widget="collapse"]').on('click', function() {
            // Find the closest parent card and toggle its collapse state
            var card = $(this).closest('.card');
            card.toggleClass('collapsed'); // You may need to adjust this class based on your CSS

            // Toggle the icon between minus and plus
            var icon = $(this).find('i');
            icon.toggleClass('fa-minus fa-plus');
        });
    });
</script>
<script>
    $(function() {
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@endsection