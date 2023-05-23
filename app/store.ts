import { configureStore } from '@reduxjs/toolkit'
import myNameReducer from "./features/myName/myNameSlice"

export const store = configureStore({
  reducer: {
    myName: myNameReducer
  },
})

export type RootState = ReturnType<typeof store.getState>