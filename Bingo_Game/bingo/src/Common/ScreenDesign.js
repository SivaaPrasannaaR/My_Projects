import React, { Component } from "react";
import MyStyles from "./StyltSheet.module.css";

class ScreenDesign extends Component {
  render() {
    return (
      <div className={MyStyles.fullBoard}>
        {/* This is the header for title */}
        <header className={MyStyles.titleDiv}>
          <h1>BINGO</h1>
        </header>

        {/* This is the main container below the header which contain both sidebar and main area.
        and it displays the score of the match */}
        <div className={MyStyles.container}>
          <div className={MyStyles.sideBars}>
            <aside className={MyStyles.scoreDiv}>
              <p>
                lorem Seawater contains approximately 0.5 ppm nitrogen
                (dissolved inorganic nitrogen compounds without N2). The amount
                is clearly lower at the surface, being approximately 0.1 ppb.
                River water concentrations vary strongly, but are approximately
                0.25 ppm in general. Depending on water properties, various
                inorganic nitrogen compounds may be found.
              </p>
            </aside>

            {/* This is the big button which displays the number selection made by the computer */}
            <div className={MyStyles.computerSelectionDiv}>
              <p>
                lorem Seawater contains approximately 0.5 ppm nitrogen
                (dissolved inorganic nitrogen compounds without N2). The amount
                is clearly lower at the surface, being approximately 0.1 ppb.
                River water concentrations vary strongly, but are approximately
                0.25 ppm in general. Depending on water properties, various
                inorganic nitrogen compounds may be found.
              </p>
            </div>
          </div>

          {/* This is the main area which displays the bingo board */}
          <div className={MyStyles.mainArea}>
            <div className={MyStyles.bingoBoardDisplayDiv}>
              {" "}
              <p>
                lorem Seawater contains approximately 0.5 ppm nitrogen
                (dissolved inorganic nitrogen compounds without N2). The amount
                is clearly lower at the surface, being approximately 0.1 ppb.
                River water concentrations vary strongly, but are approximately
                0.25 ppm in general. Depending on water properties, various
                inorganic nitrogen compounds may be found.
              </p>
            </div>
          </div>

          {/* <div className={MyStyles.footerDiv}></div> */}
        </div>
      </div>
    );
  }
}

export default ScreenDesign;
