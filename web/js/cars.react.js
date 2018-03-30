const CarSection = React.createClass({
   getInitialState: function () {
       return {
           cars: []
       }

   },

    componentDidMount: function () {
       this.loadCarsFromServer();
       setInterval(this.loadCarsFromServer, 2000);
    },

    loadCarsFromServer: function () {
       $.ajax({
          url: this.props.url,
          success: function (data) {
              this.setState({cars: data.cars});
              console.log(data.cars);
          }.bind(this)
       });
    },

    render: function () {
       return (
           <div>
               <div className="cars-container"></div>
                   <div className="cars-header">Cars</div>
               <CarsList cars={this.state.cars}/>
           </div>
       );
    }

});

const CarsList = React.createClass({
   render: function () {
       const carNodes = this.props.cars.map(function (car) {
          return (
              <CarBox carName={car.carName} color={car.color}></CarBox>
            );
       });

       return (
           <section className="carList">
               {carNodes}
           </section>
       )
   }

});

const CarBox = React.createClass({
    render: function() {
        return (
            <div className="carDescription">
                <div className="carName">
                    <h2>{this.props.carName}</h2>
                </div>
                <div className="carColor">
                    <h2>{this.props.color}</h2>
                </div>
            </div>
        );
    }
});

window.CarSection = CarSection;