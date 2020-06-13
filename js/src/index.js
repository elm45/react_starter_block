import React from "react";
import { render } from "react-dom";
import StarterApp from "./starter_app";

render(
  <StarterApp nid={document.getElementById("starter_app")} />,
  document.getElementById("starter_app")
);
