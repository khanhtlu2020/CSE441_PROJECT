package com.example.drivingtestapp;

import android.app.Activity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import java.util.ArrayList;

public class LearningAdapter extends RecyclerView.Adapter<LearningAdapter.ViewHolder> {

    private Activity context;
    private ArrayList<Learning> myArray;
    private int layoutId;

    public LearningAdapter(Activity context, int layoutId, ArrayList<Learning> arr) {
        this.context = context;
        this.layoutId = layoutId;
        this.myArray = arr;
    }

    @NonNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        LayoutInflater inflater = context.getLayoutInflater();
        View itemView = inflater.inflate(layoutId, parent, false);
        return new ViewHolder(itemView);
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHolder holder, int position) {
        Learning myItem = myArray.get(position);

        holder.maCauHoi.setText(myItem.getMaCauHoi());
        holder.cauHoi.setText(myItem.getCauHoi());
        holder.dapAn.setText(myItem.getDapAn());

    }

    @Override
    public int getItemCount() {
        return myArray.size();
    }

    public static class ViewHolder extends RecyclerView.ViewHolder {
        TextView maCauHoi, cauHoi, dapAn;

        public ViewHolder(@NonNull View itemView) {
            super(itemView);
            maCauHoi = itemView.findViewById(R.id.txtCauHoi);
            cauHoi = itemView.findViewById(R.id.txtLuaChon);
            dapAn = itemView.findViewById(R.id.txtDapAn);
        }
    }
}

